<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index (Produto $produtos){
       $produtos2 = Produto::all();
        $produto=(array) $produtos;
        var_dump($produto);
        return view('produto.index',compact($produto));
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
