<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index (){
        $produtos2 = Produto::all();
        //var_dump($produtos2);
        return view('produto.index',compact('produto'));// Enviando a variavel para index
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $id=$request->id;
        $nome=$request->nome;
        $categoria=$request->categoria;

        $produtoCriado = Produto::create($request->all());

        $produto= new Produto();
        $produto->id = $request->id;
        $produto->nome = $request->nome;
        $produto->categoria= $request->categoria;

        $produto->save();

        return redirect()->route('listar_produtos');
    }
}
