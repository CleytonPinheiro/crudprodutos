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

    <form method="post" action="/categorias/update/{{$categoria->id}}">
        @csrf

        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{$categoria->nome}}" id="nome">
        </div>

        <button type="submit" class="btn btn-dark mb-2">Atualizar categoria</button>

        <a href="{{route('categorias.listar')}}" class="btn btn-dark mb-2">Listar categorias</a>

    </form>

@endsection






