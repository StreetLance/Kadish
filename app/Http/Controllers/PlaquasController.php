<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kaddish as Kadish;
use App\Http\Controllers\CallController as  call;
class PlaquasController extends Controller
{
    public function getPlaquas(){
       $item= Kadish::get(['Name_of_Deceased','Fathers_Name','G_Date','J_Date']);
        $call = new call;
       foreach ($item as $items){

           $getitem_G = explode('.',$items->G_Date);

           $J_D = $call->getJewishDate($getitem_G[0],$getitem_G[1],$getitem_G[2]);

           $getitem_J = explode('.',$items->J_Date);
           $G_D = $call->getGregorianDate($getitem_J[0],$getitem_J[1],$getitem_J[2]);

           $items->G_Date = $G_D;
           $items->J_Date = $J_D;

       }
//        dd($item);
        return $item;
    }
}
