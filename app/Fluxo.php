<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fluxo extends Model
{
    public $id;
    public $text;

    function __construct(){
    }

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function discriminadors()
    {
        return $this->hasMany('App\Discriminador');
    }

}
