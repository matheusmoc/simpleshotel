@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('ocupantes.update', [$ocupante->id]) }}">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input name="nome" type="text" class="form-control" value="{{ $ocupante->nome }}"
                                id="inputPassword4" readonly>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" value="{{ $ocupante->email }}"
                                id="inputEmail4" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input name="endereco" type="text" class="form-control" value="{{ $ocupante->endereco }}"
                            id="inputAddress" placeholder="1234 Main St" readonly>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Melhor telefone</label>
                        <input name="telefone" type="text" class="form-control" value="{{ $ocupante->telefone }}"
                            id="inputAddress2" placeholder="(00) 00000-0000" readonly>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="cidade">Cidade</label>
                            <input name="cidade" type="text" class="form-control" value="{{ $ocupante->cidade }}"
                                id="inputCity" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="estado">Estado</label>
                            <input name="estado" type="text" class="form-control" value="{{ $ocupante->estado }}"
                                placeholder="Ex. Minas Gerais" readonly>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cep">Cep</label>
                            <input name="cep" type="text" class="form-control" value="{{ $ocupante->cep }}"
                                id="inputZip" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="mesa_id">Mesa reservada</label>
                            <input name="mesa_id" type="text" class="form-control" value="{{ $ocupante->mesa_id }}"
                                id="inputZip" readonly>
                        </div>
                    </div>
                    <div class="form-check mt-4 mb-4">
                        <input name='atendido' class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                         Encerrar atendimento
                        </label>
                    </div>

                    <hr style="border: 0; border-top: 1px solid;">


                    <button type="submit" class="btn btn-dark">Finalizar</button>
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



    </script>
@stop
