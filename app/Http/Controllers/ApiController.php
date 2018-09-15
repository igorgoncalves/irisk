<?php

namespace App\Http\Controllers;

use App\Fluxo;
use App\Discriminador;

class ApiController extends Controller
{
    protected $listResult;
    public function __construct()
    {        
    }

    function fluxos(){
        $list = Fluxo::all();
        return json_encode($list);
    }

    function discriminadores($id){
        $list = Fluxo::find($id)->discriminadors;
        return json_encode($list);     
    }
    function parametros($id){
        $list = Discriminador::find($id)->parametros;
        return json_encode($list);     
    }
}
