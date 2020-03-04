<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::all();

        return view('produto.index',compact('produtos'));// Enviando a variavel para index
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $produtoCriado = Produto::create($request->all());

        return redirect()->route('listar_produtos');
    }
}
