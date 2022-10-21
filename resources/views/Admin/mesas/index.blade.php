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
            </div>

            <div class="card-footer">
                <div class="row">
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
        <div class="p-4 ">
            <h2 class="col">Valor total de vendas: R$
                {{-- {{ number_format($total) }} --}}
            </h2>
        </div>
    </div>


    <span class="badge rounded-pill bg-light w-25 p-1 mb-1">
        {{ $mesas->count() }} resultadoe de {{ $mesas->total() }} itens
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
                            <td>{{ $mesa->id }}</td>
                            <td>
                                @if ($mesa->ocupantes == null)
                                    <div class="badge bg-secondary">
                                        Sem ocupantes
                                    </div>
                                @else
                                    {{ $mesa->ocupantes->pluck('nome')->join(', ') }}
                                @endif
                            </td>

                            <td>
                                @if ($mesa->ocupantes->count() >= 4)
                                    <div class="badge bg-danger">
                                        Mesa ocupada
                                    </div>
                                @elseif($mesa->ocupantes->count() >= 1 && $mesa->ocupantes->count() <= 4)
                                    <div class="badge bg-warning">
                                        Mesa com cadeira vaga
                                    </div>
                                @else
                                    <div class="badge bg-success">
                                        Mesa livre
                                    </div>
                                @endif
                            </td>
                            <td scope="col" style="width: 300px">
                                <div class="btn-group">
                                    <a href="{{ route('mesas.show', $mesa->id) }}" type="button" class="btn btn-light">
                                        <i class="far fa-eye"></i>
                                    </a>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#exampleModalLong">
                                        Escolher produto
                                    </button>

                                    <!-- Modal -->
                                <form method="POST" action="{{ route('mesas.update', [$mesa->id]) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Escolha os produtos que deseja</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @foreach ($produtos as $produto)
                                                    <div class="modal-body">
                                                        <div class="d-flex justify-content-between">
                                                            {{ $produto->nome_produto }} R$ {{ $produto->preco }}
                                                            <input type="checkbox" name="produto_id" value="{{$produto->id}}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-dark">Adicionar</button>
                                                    <button type="button" class="btn btn-light"data-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


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
