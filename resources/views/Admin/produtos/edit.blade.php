@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')<div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <input type="text" name="" id="">
            </li>
            <li class="list-group-item">
                <input type="text" name="" id="">
            </li>
            <li class="list-group-item">
                <input type="text" name="" id="">
            </li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Atualizar</a>
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
