<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    function Principal(){

        return view ('api');
    }

    public function BuscaCEP(Request $request){
       
        $cep = $request->input('cep');
        $retorno = Http::get('https://viacep.com.br/ws/'.$cep.'/json/');
        $apiarray = $retorno -> json();
        
        return view ('buscacep',['apiarray' => $apiarray]);
    }
}
