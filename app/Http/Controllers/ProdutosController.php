<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Support\Facades\DB;
use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('produto.index',compact('produtos','mensagem'));
    }

    public function create()
    {
        $categorias = DB::table('categorias')->get();

        return view('produto.create',compact('categorias'));
    }

    public function editar($id)
    {
        $produto = Produto::find($id);

        return view('produto.edit',compact('produto','categoria'));
    }


    public function update(Request $request,$id)
    {
         Produto::find($id)->update($request->all());

        $request->session()->flash('mensagem',"Produto atualizado com sucesso");

        return redirect()->route('produtos.listar');

    }

    public function store(Request $request)
    {
        // Criar classe para validações
        $request->validate(['nome'=>'required']);

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
