<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'Email',
        'Phone_number'
    ];
    public function kaddish(){
        return $this->hasOne('App\Kaddish', 'Client_id');
    }
}
