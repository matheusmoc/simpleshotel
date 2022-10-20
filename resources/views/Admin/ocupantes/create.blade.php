@extends('adminlte::page')

@section('title', 'Painel - Cadastrar cliente')

@section('content_header')
    <h1>Cadastro de cliente</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('ocupantes.store') }}">
        @csrf
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nome</label>
                                <input name="nome" type="text" class="form-control" id="inputPassword4">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input name="email" type="email" class="form-control" id="inputEmail4">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input name="endereco" type="text" class="form-control" id="inputAddress"
                                placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Melhor telefone</label>
                            <input name="telefone" type="text" class="form-control" id="inputAddress2"
                                placeholder="(00) 00000-0000">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Cidade</label>
                                <input name="cidade" type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Estado</label>
                                <input name="estado" type="text" class="form-control" placeholder="Ex. Minas Gerais">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Cep</label>
                                <input name="cep" type="text" class="form-control" id="inputZip">
                            </div>




                            <div class="form-group col-md-4">
                                <label for="inputZip">Mesa que será ocupada</label>
                                <select name="mesa_id" class="form-control" id="">
                                    @foreach ($mesas as $mesa)
                                        @if ($mesa->ocupantes->count() >= 4)
                                            <option class="bg-danger" value="{{ $mesa->id }}">{{ $mesa->id }}
                                            </option>
                                        @elseif($mesa->ocupantes->count() >= 1 && $mesa->ocupantes->count() <= 4)
                                            <option class="bg-warning" value="{{ $mesa->id }}">{{ $mesa->id }}
                                            </option>
                                        @else
                                            <option class="bg-success" value="{{ $mesa->id }}">{{ $mesa->id }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>






                        </div>
                        <button type="submit" class="btn btn-dark">Cadastrar</button>
                    </form>
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
