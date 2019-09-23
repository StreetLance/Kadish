<?php

namespace App\Http\Controllers;

use App\Kaddish as Kaddish;
use App\Client as Clients;
use Illuminate\Http\Request;

class KaddishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $jd = jewishtojd( $request->Month, $request->Day, $request->Year );
            $data_G = cal_from_jd( $jd, CAL_GREGORIAN );
            $data_G = $data_G[ 'day' ] . '.' . $data_G[ 'month' ] . '.' . $data_G[ 'year' ];
        } else {
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
            $param=[
                'Name_of_Deceased'=>$request->Name_of_Deceased,
                'Fathers_Name'=>$request->Name_Father_Deceased,
                'G_Date'=>$data_G,
                'After_sunset'=>(bool)$request->Sunset,
                'Order'=>(bool)$request->Order,
                'Difference_Year'=>$Difirence_Year,
            ];
//Заполнение базы клиентов в случе отсутсвия почты и эмейла
        $client = Clients::firstOrCreate([ "Email"=>$request->Email, "Phone_number"=>$request->Phone ]);

        $kadish = new Kaddish($param);
        $kadish->client()->associate($client); // присвоение Client_id при помощи встреоной функции Laravel Relations
        $kadish->save();
//        dd($kadish->id);
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
