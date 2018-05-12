<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Visiteur extends Model
{
    public $table="visiteurs";
    public function visites()
    {
        return $this->hasMany('App\Visite');
    }
}

