<?php

namespace App\Http\Controllers; //definição do namespace dessa classe

use Illuminate\Http\Request; //inclusão da classe request 
use App\Models\MotivoContato;

class PrincipalController extends Controller //nome da nossa classe da qual criamos 
{
    public function principal () {

        $motivo_contatos = MotivoContato::all();

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
