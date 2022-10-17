@extends('adminlte::page')

@section('title', 'Painel - Edição de produto')

@section('content_header')
    <h1> Edição do item "{{ $produto->nome_produto }}"</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('produtos.update', [$produto->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 600px">

                    @if ($produto->imagem)
                        <img src="{{ asset('uploads/img/' . $produto->imagem) }}"
                            height="400"class="card-img-top"alt="...">
                    @else
                        <img src="https://source.unsplash.com/random/" height="400" class="card-img-top" alt="...">
                    @endif

                    <div class="card-body">
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p> --}}
                    </div>
                    <div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <span>
                                    <input class="col-6" type="file" name="imagem" id="image"
                                        value="{{ asset('uploads/img/' . $produto->imagem) }}" onchange="loadFile(event)">
                                    <p class="text-muted">
                                        Imagem
                                    </p>
                                </span>

                                {{-- diplay da imagem --}}
                                <div class="d-flex justify-content-center">
                                    <div id="display_image"></div>
                                </div>
                                @error('imagem')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </li>


                            <li class="list-group-item">
                                <span>
                                    <input class="form-control col-6" type="text" name="nome_produto" id=""
                                        value="{{ $produto->nome_produto }}" readonly>
                                    <p class="text-muted">
                                        Nome do produto
                                    </p>
                                </span>
                                @error('nome_produto')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </li>
                            <li class="list-group-item">
                                <span>
                                    <input class="form-control col-6" type="text" name="tipo" id="">
                                    <p class="text-muted">
                                        Marca / Tipo
                                    </p>
                                </span>
                                @error('tipo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </li>
                            <li class="list-group-item">
                                <span>
                                    <input class="form-control col-6" type="text" name="preco" id="">
                                    <p class="text-muted">
                                        Preço
                                    </p>
                                </span>
                                @error('preco')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-dark">Atualizar</button>
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
        function loadFile(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var display_image = document.getElementById('display_image');
            var newimg = document.createElement('img');

            display_image.innerHTML = '';
            newimg.src = image;
            newimg.width = "100";
            display_image.appendChild(newimg);
        }
    </script>
@stop
