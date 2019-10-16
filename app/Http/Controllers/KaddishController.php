<?php

namespace App\Http\Controllers;

use App\Kaddish as Kaddish;
use App\Client as Clients;
use Illuminate\Support\Facades\Mail;
use App\Mail\KaddishSendMail1;
use App\Mail\KaddishSendMail2;
use Illuminate\Http\Request;
use App\Jobs\SendMail as Send;

class KaddishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Date_Now = cal_from_jd(date( "j.m.Y" ),CAL_JEWISH);
        $item = Kaddish::all()
            ->where( 'Order', '=', '1' )
            ->where( 'Difference_Year', '=', '1' )
            ->where( 'J_Date', '=',$Date_Now )-get(['Name_of_Deceased','Fathers_Name']);
        $item = collect( $item )->toJson();
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
        if ( $request->DataSet == "J" ) {
            $data_J = $request->Day . '.' . $request->Month . '.' . $request->Year;
            $jd = jewishtojd( $request->Month, $request->Day, $request->Year );
            $data = cal_from_jd( $jd, CAL_GREGORIAN );
            $data_G = $data[ 'day' ] . '.' . $data[ 'month' ] . '.' . $data[ 'year' ];
        } else {
            $jd = unixtojd(mktime(0, 0, 0,$request->Month, $request->Day, $request->Year ));
            $Data_J= cal_from_jd($jd,CAL_JEWISH);
            $data_J = $Data_J[ 'day' ] . '.' . $Data_J[ 'month' ] . '.' . $Data_J[ 'year' ];
            $data_G = $request->Day . '.' . $request->Month . '.' . $request->Year;
        }
//Поиск зазницы с текущей датой в 11 месяцев
        $Date_Now = date( "d.m.y" );
        $diff = abs( strtotime( $Date_Now ) - strtotime( $data_G ) );

        $years = floor( $diff / ( 365 * 60 * 60 * 24 ) );
        $months = floor( ( $diff - $years * 365 * 60 * 60 * 24 ) / ( 30 * 60 * 60 * 24 ) );

        if ( $years > 0 ) {
            $Difirence_Year = false;
        } elseif ( $months <= 11 ) {
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
            'Lang' => $request->Lang,
            'After_sunset' => (bool)$request->Sunset,
            'Order' => (bool)$request->Order,
            'Difference_Year' => $Difirence_Year,
        ];
//Заполнение базы клиентов в случе отсутсвия почты и эмейла
        $client = Clients::firstOrCreate( [ "Email" => $request->Email, "Phone_number" => $request->Phone ] );

        $kadish = new Kaddish( $param );
        $kadish->client()->associate( $client ); // присвоение Client_id при помощи встреоной функции Laravel Relations
        $kadish->save();
        Mail::to($request->Email)->send(new KaddishSendMailThank_Reg());
        return $kadish->id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kaddish  $kaddish
     * @return \Illuminate\Http\Response
     */
    public function show(Kaddish $kaddish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kaddish  $kaddish
     * @return \Illuminate\Http\Response
     */
    public function edit(Kaddish $kaddish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kaddish  $kaddish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kaddish $kaddish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kaddish  $kaddish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kaddish $kaddish)
    {
        //
    }
}
