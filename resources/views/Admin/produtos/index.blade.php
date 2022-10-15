@extends('adminlte::page')

@section('title', 'Painel do graçom - PRODUTOS')

@section('content_header')
    <h1>Painel do graçom / PRODUTOS</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($listaProdutos as $lista)
            <div class="col">
                <div class="card ml-2">
                    <img src={{$lista->imagem}} height="280" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lista->nome_produto }}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$ {{ $lista->preco }}</li>
                        <li class="list-group-item">{{ $lista->tipo }}</li>
                        @if ($lista->quantidade != 'ilimitado')
                            <li class="list-group-item">Estoque: {{ $lista->quantidade }} unidades</li>
                        @else
                            <li class="list-group-item">Estoque: {{ $lista->quantidade }}</li>
                        @endif
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('produtos.edit', [$lista->id]) }}" class="btn btn-dark">Editar item</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                {{$listaProdutos->links()}}
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
