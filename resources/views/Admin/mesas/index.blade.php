@extends('adminlte::page')

@section('title', 'Painel - Lista de mesas')

@section('content_header')
    <h1>Lista de mesas</h1>
@stop

@section('content')
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Pesquisar mesas</h3>
        </div>

        <form id="search-form" action="{{ route('mesas.index') }}">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-12 col-sm-4 form-group">
                        <label for="id">Nº da mesa</label>
                        <input id="id" class="form-control masked" name="id" value="{{ request()->id ?? '' }}"
                            placeholder="Nº" type="text" data-mask="##########">
                    </div>
                </div>
                {{-- <div class="col form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="atendimento">
                        <option class="font-weight-bold text-muted" value="">Todos</option>
                        <option class="font-weight-bold text-success" value="aberto"
                            {{ request()->atendimento === 'aberto' ? 'selected' : '' }}>Em aberto</option>
                        <option class="font-weight-bold text-danger" value="encerrado"
                            {{ request()->atendimento === 'encerrado' ? 'selected' : '' }}>Encerrado</option>
                    </select>
                </div> --}}
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-12 col-sm-5">
                        <a href="{{ route('mesas.create') }}" class="btn btn-outline-dark mb-2 cadastrar"><i
                                class="fas fa-plus"></i> Cadastrar mesa</a>
                    </div>
                    <div class="col-12 col-sm-7">
                        <div class="pesquisar-limpar">
                            <button type="button" class="btn btn-outline-secondary mb-2 limpar" onclick="ClearFields()">
                                <i class="fas fa-times"></i> Limpar Campos
                            </button>

                            <button type="submit" class="btn btn-outline-info mb-2 pesquisar">
                                <i class="fas fa-search"></i>
                                Pesquisar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <span class="badge rounded-pill bg-light w-25 p-1 mb-1">
          {{ $mesas->count()}} resultadoe de {{  $mesas->total() }} itens
    </span>

    <div class="card card-dark card-outline">
        <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-striped dataTable dtr-inline">
                <thead>
                    <tr>
                        <th scope="col" style="width: 160px">Número da mesa</th>
                        <th scope="col">Ocupantes</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($mesas as $mesa)
                    <tr>
                        <td>{{$mesa->id}}</td>
                        <td></td>
                        {{-- @if ($atendimento->estagiario)
                                <td>{{ $atendimento->estagiario->nome }}</td>
                            @else
                                <td>
                                    <div class="badge bg-secondary">
                                        Sem estagiário vinculado
                                    </div>
                                </td>
                            @endif --}}
                        <td>
                            {{-- @if ($atendimento->finalizado == false)
                                    <div class="badge bg-success font-weight-bold text-white">Em aberto</div>
                                @elseif($atendimento->finalizado == true)
                                    <div class="badge bg-danger font-weight-bold text-white">Encerrado</div>
                                @endif --}}
                        </td>
                        <td scope="col" style="width: 300px">
                            <div class="btn-group">
                                <a href="#" type="button" class="btn btn-default" title="Visualizar">
                                    <i class="far fa-eye"></i>
                                </a>


                                {{-- @if ($atendimento->finalizado == false) --}}
                                <a href="#" type="button" class="btn btn-primary" id="send" title="Editar">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>

                                <a href="#" type="button" class="btn btn-danger" id="send" title="Encerrar">
                                    <i class="fas fa-exclamation-triangle"></i>
                                </a>
                                {{-- @endif --}}

                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        @if ($mesas->hasPages())
        <div class="card-footer clearfix pb-0">
            {{ $mesas->links() }}
        </div>
        @endif

    </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop
