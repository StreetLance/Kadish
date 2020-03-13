<?php

namespace App\Http\Controllers;

use App\Events\RemindKaddishPayMin11;
use App\Events\RemindKaddishPayMax11;
use App\Events\RemindKaddishMin11;
use App\Events\RemindKaddishMax11;
use App\Kaddish as Kaddish;
use App\Client as Clients;
//use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use Newsletter;

class KaddishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $jd = unixtojd(time());
        $Date_Now = cal_from_jd($jd, CAL_JEWISH);
        $Date_Now = $Date_Now['day'] . '.' . $Date_Now['month'] . '.' . '%';
        $item = DB::table('kaddishes')
            ->where('Order', '=', '1')
            ->where('Difference_Year', '=', '1')
            ->where('J_Date', 'like', $Date_Now)
            ->get();
        $item = collect($item)->toJson();
        return $item;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        //Форматирвоание и сборка пришедшей даты
        if ($request->DataSet == "J") {
            $data_J = $request->Day . '.' . $request->Month . '.' . $request->Year;
            $day_J = $request->Day;
            $jd = jewishtojd($request->Month, $request->Day, $request->Year);
            $data = cal_from_jd($jd, CAL_GREGORIAN);
            $data_G = $data['day'] . '.' . $data['month'] . '.' . $data['year'];
        } else {
            $jd = unixtojd(mktime(0, 0, 0, $request->Month, $request->Day, $request->Year));
            $Data_J = cal_from_jd($jd, CAL_JEWISH);
            $day_J = $Data_J['day'];
            $data_J = $Data_J['day'] . '.' . $Data_J['month'] . '.' . $Data_J['year'];
            $data_G = $request->Day . '.' . $request->Month . '.' . $request->Year;
        }
//Поиск разницы с текущей датой в 11 месяцев
        $Date_Now = date("d.m.y");
        $diff = abs(strtotime($Date_Now) - strtotime($data_G));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));

        if ($years > 0) {
            $Difirence_Year = false;
        } elseif ($months <= 11) {
            $Difirence_Year = true;
        } else {
            $Difirence_Year = false;
        }
        //Задаю параметры для заполнения бащы данных
        $param = [
            'Name_of_Deceased' => $request->Name_of_Deceased,
            'Fathers_Name' => $request->Name_Father_Deceased,
            'G_Date' => $data_G,
            'J_Date' => $data_J,
            'Jday' => $day_J,
            'Lang' => $request->Lang,
            'After_sunset' => (bool)$request->Sunset,
            'Order' => (bool)$request->Order,
            'Difference_Year' => $Difirence_Year,
        ];

//Заполнение базы клиентов в случе отсутсвия почты и эмейла
        $client = Clients::firstOrCreate(["Email" => $request->Email, "Phone_number" => $request->Phone]);
        if (isset($request->First_Name) && isset($request->Last_Name)) {
            $client->update(['Name' => $request->First_Name, 'Last_Name' => $request->Last_Name]);
        }

        $kadish = new Kaddish($param);
        $kadish->client()->associate($client); // присвоение Client_id при помощи встреоной функции Laravel Relations
        $kadish->save();
        $item['id'] = $kadish->id;
        $item['order'] = $request->Order;
        //send email

$addMonth = cal_from_jd( unixtojd( strtotime($data_G .'+10 month') ), CAL_JEWISH );
        $addMonth =  $addMonth['day'] . ' ' . $addMonth['monthname'] . ' ' . $addMonth['year'];
        if ($request->has('First_Name')) {

            if ($Difirence_Year == true) {

                event(new RemindKaddishPayMin11( $request->Email, $request->Lang ,$request->Name_of_Deceased,$request->Name_Father_Deceased,$addMonth ));
                event(new RemindKaddishPayMin11( 'zeevwk@gmail.com', $request->Lang ,$request->Name_of_Deceased,$request->Name_Father_Deceased,$addMonth ));

            }else{

                event(new RemindKaddishPayMax11( $request->Email, $request->Lang,$request->Name_of_Deceased,$request->Name_Father_Deceased ));
                event(new RemindKaddishPayMax11( 'zeevwk@gmail.com', $request->Lang,$request->Name_of_Deceased,$request->Name_Father_Deceased ));

            }
        } else {

            if ($Difirence_Year == true) {

                event(new RemindKaddishMin11( $request->Email, $request->Lang,$request->Name_of_Deceased,$request->Name_Father_Deceased ));
                event(new RemindKaddishMin11( 'zeevwk@gmail.com', $request->Lang,$request->Name_of_Deceased,$request->Name_Father_Deceased ));

            }else{

                event(new RemindKaddishMax11( $request->Email, $request->Lang,$request->Name_of_Deceased,$request->Name_Father_Deceased ));
                event(new RemindKaddishMax11( 'zeevwk@gmail.com', $request->Lang,$request->Name_of_Deceased,$request->Name_Father_Deceased ));
            }
        }
        return $item;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kaddish $kaddish
     * @return \Illuminate\Http\Response
     */
    public function show(Kaddish $kaddish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kaddish $kaddish
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Kaddish $kaddish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Clients(["Name" => $request->Name, "Last_Name" => $request->Last_Name]);
        $kadish = Kaddish::find($id);
        $kadish->client()->save($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kaddish $kaddish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kaddish $kaddish)
    {
        //
    }
}
