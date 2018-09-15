<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discriminador extends Model
{
    public $id;
    public $text;

    function __construct(){
    }

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function fluxo()
    {
        return $this->belongsTo('App\Fluxo');
    }
    public function parametros()
    {
        return $this->hasMany('App\Parametro');
    }
}
