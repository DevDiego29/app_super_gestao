<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request){
        /*
        $contato = new SiteContato();
        $contato->create($request->all());
        */
        //realizar a validação dos dados do formulario recebidos no request
        
        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no mín 3 e máx 40 caracteres
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        
        //SiteContato::create($request->all());
        
    }
}
