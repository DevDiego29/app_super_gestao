<?php

namespace App\Http\Controllers; //definição do namespace dessa classe

use Illuminate\Http\Request; //inclusão da classe request 

class PrincipalController extends Controller //nome da nossa classe da qual criamos 
{
    public function principal () {
        return view('site.principal');
    }
}
