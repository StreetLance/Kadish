<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multilanguge extends Model
{
protected $table ='multilanguges';
    //создаю полиморфную связь
    public function local(){
            return $this->belongsTo('App\Models\Page');
    }

}
