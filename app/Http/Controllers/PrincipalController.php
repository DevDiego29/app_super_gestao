<?php

namespace App\Http\Controllers; //definição do namespace dessa classe

use Illuminate\Http\Request; //inclusão da classe request 

class PrincipalController extends Controller //nome da nossa classe da qual criamos 
{
    public function principal () {

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.principal', ['motivo_contatos' => $motivo_contatos]);
    }
}
