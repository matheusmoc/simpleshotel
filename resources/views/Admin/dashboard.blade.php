@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="row justify-content-center" style="padding-top: 200px">
            <h1>Bem-vindo ao painel, 
            <div>
                {{Auth::user()->name}}</h1>
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
