<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estagiario;

class EstagiarioController extends Controller
{
    public function index()
    {
        $registros = Estagiario::all();
        return view('admin.estagiarios.index', compact('registros'));
    }
    public function adicionar()
    {
        return view('admin.estagiarios.adicionar');
    }
    public function salvar(Request $req)
    {
        $dados = $req->all();
if (isset($dados['publicado'])) {
    $dados['publicado'] = 'sim';
}else {
    $dados['publicado'] = "nao";
}

        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/estagiario";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem); 
            $dados['imagem'] = $dir."/".$nomeImagem;

        }
        Estagiario::create($dados);

        return redirect()->route('admin.estagiarios');
    }

    public function editar($id)
    {
        $registro = Estagiario::find($id);
        return view('admin.estagiarios.editar', compact('registro'));
    }
    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
if (isset($dados['publicado'])) {
    $dados['publicado'] = 'sim';
}else {
    $dados['publicado'] = "nao";
}

        if ($req->hasFile('imagem')) {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/estagiarios";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem); 
            $dados['imagem'] = $dir."/".$nomeImagem;

        }
        Estagiario::find($id)->update($dados);

        return redirect()->route('admin.estagiarios');
    }

    public function deletar($id)
    {
       // $id ->delete();
       // return redirect('admin.estagiarios');
        Estagiario::find($id)->delete();
       return redirect()->route('admin.estagiarios');

    }
}
