@extends('adminlte::page')

@section('title', 'Painel - Cadastrar cliente')

@section('content_header')
    <h1>Cadastro de cliente</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Nome</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Melhor telefone</label>
                        <input type="text" class="form-control" id="inputAddress2"
                            placeholder="(00) 00000-0000">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <input type="text" class="form-control" placeholder="Ex. Minas Gerais">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Cep</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </form>
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
