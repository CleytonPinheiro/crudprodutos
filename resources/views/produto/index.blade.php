
@extends('layout')

@section('cabecalho')

    Produtos

@endsection


@section('conteudo')

    <ul class="list-group">

        @foreach ($produtos->toArray() as $produto)

            <label for="id" class="">ID</label>
            <li class="list-group-item">{{$produto}} </li>

            <label for="nome" class="">Nome</label>
            <li class="list-group-item"> {$produto->nome} </li>

            <label for="categoria" class="">Categoria</label>
            <li class="list-group-item"> {$produto->categoria} </li>

            {{-- This comment will not be present in the rendered HTML --}}

        @endforeach

    </ul>

@endsection
