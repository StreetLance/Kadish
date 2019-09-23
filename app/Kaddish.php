<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kaddish extends Model
{
//    protected $dateFormat = 'd-m-Y';
    protected $fillable = [
        'Name_of_Deceased',
        'Fathers_Name',
        'G_Date',
        'After_sunset',
        'Order',
        'Difference_Year'];
    public function client(){
        return $this->belongsTo( 'App\Client' );
    }
}
