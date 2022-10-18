@extends('adminlte::page')

@section('title', 'Adicionar ocupantes')

@section('content_header')
    <h1>Adicionar Ocupantes</h1>
@stop

@section('content')
    <div class="card mt-5">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <span>
                        <label for="">Cadeira 1</label>
                        <select class="form-control">
                            @foreach ( $ocupantes as $ocupante )
                            <option value={{$ocupante->id}}>{{$ocupante->nome}}</option>
                            @endforeach
                        </select>
                    </span>
                </div>
                <div class="form-group">
                    <span>
                        <label for="">Cadeira 2</label>
                        <select class="form-control">
                            @foreach ( $ocupantes as $ocupante )
                            <option value={{$ocupante->id}}>{{$ocupante->nome}}</option>
                            @endforeach
                        </select>
                    </span>
                </div>

                <div class="form-group">
                    <span>
                        <label for="">Cadeira 3</label>
                        <select class="form-control">
                            @foreach ( $ocupantes as $ocupante )
                            <option value={{$ocupante->id}}>{{$ocupante->nome}}</option>
                            @endforeach
                        </select>
                    </span>
                </div>

                <div class="form-group">
                    <span>
                        <label for="">Cadeira 4</label>
                        <select class="form-control">
                            @foreach ( $ocupantes as $ocupante )
                            <option value={{$ocupante->id}}>{{$ocupante->nome}}</option>
                            @endforeach
                        </select>
                    </span>
                </div>

            </form>
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
