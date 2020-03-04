@extends('layout')

@section('cabecalho')

    Adicionar produto

@endsection


@section('conteudo')



    <form method="post" action="/produtos/adicionar">
        @csrf

        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="categoria" class="">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria">
        </div>

        <button type="submit" class="btn btn-dark mb-2">Adicionar produto</button>

        <a href="{{route('listar_produtos')}}" class="btn btn-dark mb-2">Listar produtos</a>


    </form>

@endsection




