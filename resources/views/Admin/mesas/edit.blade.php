@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')



    <!-- Modal -->
    <form method="POST" action="{{ route('mesas.update', [$mesa->id]) }}">
        @method('PUT')
        @csrf
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Escolha os produtos que deseja</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @foreach ($produtos as $produto)
                        <div class="modal-body">
                            <div class="d-flex justify-content-between">
                                {{ $produto->nome_produto }} R$ {{ $produto->preco }}
                                <input type="checkbox" name="consumo" value="{{$produto->preco}}">
                            </div>
                        </div>
                    @endforeach
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Adicionar</button>
                        <a href="{{ route('mesas.index') }}" type="button" class="btn btn-light">Voltar</a>
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
        $(document).ready(function() {
            $('#exampleModalLong').modal('show');
        })
        $('#exampleModalLong').modal({backdrop: 'static', keyboard: false})

    </script>
@stop
