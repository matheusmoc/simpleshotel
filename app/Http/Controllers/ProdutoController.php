<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProdutoController extends Controller
{

    public function index()
    {
        $listaProdutos = Produto::orderBy('id', 'DESC')->paginate(3);

        return view('admin.produtos.index', compact('listaProdutos'));
    }


    public function create()
    {
        return view('admin.produtos.create');
    }


    public function store(Request $request)
    {

    }


    public function show(Produto $produto)
    {
        //
    }


    public function edit($id)
    {
        $produto = Produto::find($id);

        return view('admin.produtos.edit', compact('produto'));
    }

    public function update(UpdateProdutoRequest $request, $id)
    {

        $product = Produto::find($id);
        $product->imagem = $request->imagem;
        $product->nome_produto = $request->nome_produto;
        $product->tipo = $request->tipo;
        $product->preco = $request->preco;
        $product->quantidade = $request->quantidade;

        if ($request->hasFile('imagem')) {

            $destination = 'uploads/img/' . $product->imagem;

            if (Storage::exists($destination)) {
                Storage::delete($destination);
            } else {
                $file = $request->file("imagem");
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(\public_path("uploads/img/"), $imageName);
                $product->imagem = $imageName;
            }
        }
        $product->update($request->validated());
        return redirect()->route('produtos.index')->with('status', 'Item atualizado com sucesso !');
    }


    public function destroy(Produto $produto)
    {
        //
    }
}
