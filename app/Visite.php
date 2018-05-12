<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    public $table="visites";

    public function visiteur()
    {
        return $this->belongsTo('App\Visiteur');
    }
}
