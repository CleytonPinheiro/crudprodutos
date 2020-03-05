@extends('layout')

@section('cabecalho')

    Adicionar produto

@endsection

@section('conteudo')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/produtos/editar/{{$produto->id}}">
        @csrf

        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="categoria" class="">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria">
        </div>

        <button type="submit" class="btn btn-dark mb-2">Atualizar produto</button>

        <a href="{{route('produtos.listar')}}" class="btn btn-dark mb-2">Listar produtos</a>

    </form>

@endsection





