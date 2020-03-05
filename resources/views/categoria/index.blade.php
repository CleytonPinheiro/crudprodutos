@extends('layout')

@section('cabecalho')

    Lista de categorias

@endsection

@section('conteudo')

    @if(!empty($mensagem))
        <div class="alert alert-success">
            {{$mensagem}}
        </div>
    @endif
    <a href="{{route('categorias.adicionar')}}" class="btn btn-dark mb-2">Adicionar categoria</a>

    <table class="table table-bordered table-hover table-striped ">
        <caption>Lista de categorias cadastradas</caption>
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>

        @foreach($categorias as $categoria)
            <tbody>
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nome}}</td>
                <td>
                    <div class="btn-group">
                        <form method="post" action="categorias/editar/{{$categoria->id}}">
                            @csrf
                            <button  class="btn btn-primary fas fa-edit ">    Editar</button>
                        </form>

                        <form method="post" action="categorias/deletar/{{$categoria->id}}"
                              onsubmit="return confirm ('Deseja excluir {{$categoria->nome}}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger far fa-trash-alt">   Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>

@endsection
