@extends('layout')

@section('cabecalho')

    Adicionar categoria

@endsection

@section('conteudo')

    <form method="post" action="/categorias/adicionar">
        @csrf

        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button type="submit" class="btn btn-dark mb-2">Adicionar categoria</button>

        <a href="{{route('categorias.listar')}}" class="btn btn-dark mb-2">Listar produtos</a>

    </form>

@endsection





