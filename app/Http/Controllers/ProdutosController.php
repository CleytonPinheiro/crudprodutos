<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){
        $produtos = Produto::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('produto.index',compact('produtos','mensagem'));
    }

    public function create()
    {
        return view('produto.create');
    }

    public function update(Request $request)
    {
        $produto= Produto::updating($request);
        var_dump($request);
        die();
        //return view('produto.update','produto');
        //$produto->nome = $request->nome;
        //$produto->categoria = $request->categoria;
        //$produto->save;

    }

    public function store(Request $request)
    {
        // Criar classe para validações
        $request->validate(['nome'=>'required','categoria'=>'required']);

        $produtoCriado = Produto::create($request->all());

        $request->session()->flash('mensagem',"Produto: {$produtoCriado->nome}
         Categoria:{$produtoCriado->categoria} criado com sucesso");

        return redirect()->route('produtos.listar');
    }

    public function destroy(Request $request)
    {
        Produto::destroy($request->id);

        $request->session()->flash('mensagem',"Produto removido com sucesso");

        return redirect('/produtos');
    }
}
