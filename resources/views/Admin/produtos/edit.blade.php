@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edição do item "{{$produto->nome_produto}}"</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('produtos.update', [$produto->id]) }}">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card col-md-6">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$produto->nome_produto}}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p> --}}
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span>
                                    <input class="form-control col-6" type="text" name="" id="" value="{{$produto->nome_produto}}" readonly>
                                    <p class="text-muted">
                                        Nome do produto
                                    </p>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span>
                                    <input class="form-control col-6" type="text" name="" id="">
                                    <p class="text-muted">
                                        Marca / Tipo
                                    </p>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <span>
                                    <input class="form-control col-6" type="text" name="" id="">
                                    <p class="text-muted">
                                        Preço
                                    </p>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark">Atualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
