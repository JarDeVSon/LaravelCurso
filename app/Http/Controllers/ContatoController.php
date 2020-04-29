<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index (){

        $contatos = [(object)["nome"=> "Maria", "tel" => "65665565"]];
        $contatos = [(object)["nome"=> "Pedro", "tel" => "87874545"]];

        $contato = new Contato();
        $con = $contato->lista();


        return view ('contato.index', compact('contatos'));
    }
    public function criar (Request $req){
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }
    public function editar (){
        return "Esse é o Editar do ContatoController";
    }
}
