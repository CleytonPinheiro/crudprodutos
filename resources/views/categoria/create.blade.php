@extends('layout')

@section('cabecalho')

    Adicionar categoria

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

    <form method="post" action="/categorias/adicionar">
        @csrf

        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button type="submit" class="btn btn-dark mb-2">Adicionar Categoria</button>

        <a href="{{route('categorias.listar')}}" class="btn btn-dark mb-2">Listar produtos</a>

    </form>

@endsection




