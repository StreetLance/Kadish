<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multilanguge extends Model
{
protected $table ='localization';
    //создаю полиморфную связь
    public function local(){
        return $this->morphTo();
    }

}
