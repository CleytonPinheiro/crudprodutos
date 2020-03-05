@extends('layout')

@section('cabecalho')

    Produtos

@endsection

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif
<a href="{{route('produtos.adicionar')}}" class="btn btn-dark mb-2">Adicionar produtos</a>

    <table class="table table-bordered table-hover table-striped ">
        <caption>Lista de produtos</caption>
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>

        @foreach($produtos as $produto)
                <tbody>
                    <tr>

                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->categoria}} </td>
                        <td>
                            <div class="btn-group">
                                <form method="post" action="produtos/editar/{{$produto->id}}">
                                    @csrf
                                    <button class="btn btn-primary fas fa-edit ">    Editar</button>
                                </form>

                                <form method="post" action="produtos/deletar/{{$produto->id}}"
                                      onsubmit="return confirm ('Deseja excluir {{$produto->nome}}?')">
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
