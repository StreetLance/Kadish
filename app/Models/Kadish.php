<?php

namespace App\Models;

use http\Params;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use function MongoDB\BSON\toJSON;

/**
 * Class KadishCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class Kadish extends Model
{

    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'kaddishes';
     protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'Name_of_Deceased',
        'Fathers_Name',
        'G_Date',
        'J_Date',
        'Lang',
        'After_sunset',
        'Order',
        'Jday',
        'Difference_Year','Extras'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function client(){
        return $this->belongsTo( 'App\Client' );
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */
    public function getOrderAttribute($value)
    {

        if ($value == 1){
            $values  ='Paid ';
        }else if ($value == 0){
            $values  ='Not paid';
        }

        return $values;
    }
    public function getJDateAttribute($value)
    {
        $month = [
            1=>"Tishry",
            2=>"Heshvan",
            3=>"Kislev",
            4=>"Tevet",
            5=>"Shevat",
            6=>"Adar",
            7=>"Adar II",
            8=>"Nissan",
            9=>"Iyar",
            10=>"Sevan",
            11=>"Tammuz",
            12=>"Av",
            13=>"Elul",
        ];
        $data=explode('.',$value);
        $data[1] = $month[$data[1]];
        $data = implode('/',$data);

        return $data;
    }
    public function getGDateAttribute($value )
    {
        $month = [
            1=>"January",
            2=>"February",
            3=>"March",
            4=>"April",
            5=>"May",
            6=>"June",
            7=>"July",
            8=>"August",
            9=>"September",
            10=>"October",
            11=>"November",
            12=>"December",
        ];
        $data=explode('.',$value);
        $data[1] = $month[$data[1]];
        $data = implode('/',$data);

        return $data;
    }
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setOrderAttribute($value)
    {

        if ($value == 'Paid'){
            $values  =1;
        }else if ($value == 'Not paid'){
            $values  = 0;
        }

        return $values;
    }


    public function setExtrasAttribute($value)
    {

        $datam = json_decode($value, true);

    if(!$datam['Month']== '0'){
    $data=explode('/', $this->attributes['G_Date']);
    $data[1] = $datam['Month'];
                $this->attributes['Jday'] =$data[0];
        $this->attributes['G_Date'] = implode('.',$data);
}else{
        $month = [
            1=>"January",
            2=>"February",
            3=>"March",
            4=>"April",
            5=>"May",
            6=>"June",
            7=>"July",
            8=>"August",
            9=>"September",
            10=>"October",
            11=>"November",
            12=>"December",
        ];
        $data=explode('/', $this->attributes['G_Date']);
        $key = array_search($data[1], $month); // $key = 2;
        $data[1] = $key;
        $this->attributes['Jday'] =$data[0];
        $this->attributes['G_Date'] = implode('.',$data);
    }

        if(!$datam['J_Month']=='0') {
            $data = explode( '/', $this->attributes[ 'J_Date' ] );
            $data[ 1 ] = $datam[ 'J_Month' ];
            $this->attributes['Jday'] =$data[0];
            $this->attributes[ 'J_Date' ] = implode( '.', $data );
        }else{
            $month = [
                1=>"Tishry",
                2=>"Heshvan",
                3=>"Kislev",
                4=>"Tevet",
                5=>"Shevat",
                6=>"Adar",
                7=>"Adar II",
                8=>"Nissan",
                9=>"Iyar",
                10=>"Sevan",
                11=>"Tammuz",
                12=>"Av",
                13=>"Elul",
            ];

            $data=explode('/', $this->attributes['J_Date']);
            $key = array_search($data[1], $month); // $key = 2;
            $data[1] = $key;
            $this->attributes['J_Date'] = implode('.',$data);
        }
if(!$datam['Month']== '0' &&$datam['J_Month']=='0'){
    $data=explode('.', $this->attributes['G_Date']);
    $jd = unixtojd(mktime(0, 0, 0,$data[1], $data[0], $data[2] ));

    $Data_J= cal_from_jd($jd,CAL_JEWISH);
    $data_J = $Data_J[ 'day' ] . '.' . $Data_J[ 'month' ] . '.' . $Data_J[ 'year' ];
    $this->attributes['J_Date'] = $data_J;
}
        if(!$datam['J_Month']=='0' && $datam['Month']== '0'){
            $data=explode('.', $this->attributes['J_Date']);
            $jd = jewishtojd( $data[1], $data[0], $data[2] );
            $Data_J= cal_from_jd($jd,CAL_GREGORIAN);
            $this->attributes['Jday'] =$data[0];
            $data_J = $Data_J[ 'day' ] . '.' . $Data_J[ 'month' ] . '.' . $Data_J[ 'year' ];
            $this->attributes['G_Date'] = $data_J;
        }

    }


}
