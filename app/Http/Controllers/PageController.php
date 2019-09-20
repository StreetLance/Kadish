<?php

namespace App\Http\Controllers;

use App\Models\Page as Pages;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use function MongoDB\BSON\toJSON;

class PageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd($request->Language);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Page  $pageController
     * @return \Illuminate\Http\Response
     */
    public function show($D,$M,$Y)
    {
        $jd = gregoriantojd($D, $M, $Y);
        return cal_from_jd($jd,CAL_JEWISH);
//        $item = Pages::whereHas('localization',function ( Builder $query ) use ($lang){
//
//            $query->where('Language','=',  $lang);
//
//        })->where('Pages', '=', $Page)->get(['id','Title','Body','SubTitle']);
//        $item=collect($item);
//        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $pageController
     * @return \Illuminate\Http\Response
     */
    public function edit( Page $pageController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $pageController
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Page $pageController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $pageController
     * @return \Illuminate\Http\Response
     */
    public function destroy( Page $pageController)
    {
        //
    }
}
