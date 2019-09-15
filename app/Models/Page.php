<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    // привязываю можель локализации
    public function localization()
    {
     return $this->hasOne('App\Multilanguge','Language_id');
    }
}
