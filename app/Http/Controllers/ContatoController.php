<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
         (object) ["nome"=> "Gesimiel", "tel"=>"9999999"],
           (object) ["nome"=> "Nayara", "tel"=>"9999998"]
        ];

        $contato = new Contato();
        dd($contato->lista());

        return view('contato.index', compact('contatos')); //contato é a pasta o index o arquivo.
    }
    public function criar()
    {
        return "Esse é o criar do ContatoController";
    }
    public function editar()
    {
        return "Esse é o editar do ContatoController";
    }
}
