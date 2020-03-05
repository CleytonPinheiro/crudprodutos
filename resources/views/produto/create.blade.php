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

    <form method="post" action="/produtos/adicionar">
        @csrf

        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

            <div class="form-group">
            <select class="form-control">
                <option>-- Categorias -- </option>
                @foreach($categorias as $categoria)
                    <option>
                        {{$categoria->nome}}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success mb-2">Adicionar produto</button>

        <a href="{{route('produtos.listar')}}" class="btn btn-danger mb-2">Cadastrar categoria</a>

        <a href="{{route('produtos.listar')}}" class="btn btn-info mb-2">Listar produtos</a>

    </form>

@endsection




