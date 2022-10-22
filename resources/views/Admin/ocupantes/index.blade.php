@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="col-12 col-sm-5 mb-5 mt-4">
            <a href="{{ route('ocupantes.create') }}" class="btn btn-outline-dark mb-2 cadastrar"><i class="fas fa-plus"></i>
                Cadastrar cliente</a>
        </div>
        <div class="row text-center">
            <!-- Team item -->
            @foreach ($ocupantes as $ocupante)
                <div class="col-xl-3 col-sm-6 mb-5">
                    <div class="bg-dark rounded shadow-sm py-5 px-4"><img
                            src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                            alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">{{ $ocupante->nome }}</h5><span
                            class="small text-uppercase text-muted">Cliente</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link  text-light"><i
                                        class="fab fa-whatsapp"></i></i></a></li>
                            <div>Usuário criado em: </div>
                            <div class="text-muted">{{ $ocupante->created_at->format('d/m/Y') }}</div>
                            <div class="col mb-5 mt-4">

                                @if ($ocupante->atendido == true)
                                <div class="badge bg-success">
                                    Conta paga!
                                </div>
                                <div class="col mt-4">

                                    <form method="POST" action="{{ route('ocupantes.destroy', [$ocupante->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type='submit' class="btn btn-outline-danger"> Excluir cliente</a>
                                    </form>

                                </div>
                                @elseif($ocupante->atendido == false)
                                    <a href="{{ route('ocupantes.edit', $ocupante->id) }}"class="btn btn-outline-light mb-3"> Visualizar cliente</a>

                                    <form method="POST" action="{{ route('ocupantes.destroy', [$ocupante->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type='submit' class="btn btn-outline-danger"> Excluir cliente</a>
                                    </form>
                                @endif

                            </div>
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
    <script>
        console.log('Hi!');
    </script>
@stop
