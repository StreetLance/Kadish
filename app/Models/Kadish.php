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
        'Difference_Year'];
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

        if ($value == 0){
            $values  ='Paid ';
        }else if ($value == 1){
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
    public function getGDateAttribute($value)
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
}
