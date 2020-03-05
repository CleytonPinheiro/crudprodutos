<?php


namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $request){

        $categorias = Categoria::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');

        return view('categoria.index',compact('categorias','mensagem'));
    }



    public function create()
    {
        return view('categoria.create');
    }

    public function editar($id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.edit',compact('categoria'));
    }


    public function update(Request $request,$id)
    {
        Categoria::find($id)->update($request->all());

        $request->session()->flash('mensagem',"Categoria atualizado com sucesso");

        return redirect()->route('categorias.listar');

    }

    public function store(Request $request)
    {
        // Criar classe para validações
        $request->validate(['nome'=>'required']);

        $categoriaCriado = Categoria::create($request->all());

        $request->session()->flash('mensagem',"Categoria: {$categoriaCriado->categoria} criado com sucesso");

        return redirect()->route('categorias.listar');
    }

    public function destroy(Request $request)
    {
        Categoria::destroy($request->id);

        $request->session()->flash('mensagem',"Categoria removido com sucesso");

        return redirect('/categorias');
    }
}
