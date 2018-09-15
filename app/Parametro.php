<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    public $id;
    public $text;

    function __construct(){
    }

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function discriminador()
    {
        return $this->belongsTo('App\Discriminador');
    }

}
