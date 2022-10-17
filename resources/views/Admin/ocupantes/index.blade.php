@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row text-center">
        <!-- Team item -->
        @foreach ($ocupantes as $ocupante)   
        <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-dark rounded shadow-sm py-5 px-4"><img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">{{$ocupante->nome}}</h5><span class="small text-uppercase text-muted">Cliente</span>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link  text-light"><i class="fab fa-whatsapp"></i></i></a></li>
                    <div>Usuário criado em: </div>
                    <div class="text-muted">{{$ocupante->created_at->format('d/m/Y')}}</div>
                </ul>
            </div>
        </div>
        @endforeach
        <!-- End -->
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop