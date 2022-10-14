<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function index()
    {
        return view('Admin.produtos.index');
    }

 
    public function create()
    {
        return view('Admin.produtos.create');
    }


    public function store(Request $request)
    {

    }


    public function show(Produto $produto)
    {
        //
    }


    public function edit(Produto $produto)
    {
        return view('Admin.produtos.edit');
    }

    public function update(Request $request, Produto $produto)
    {
        //
    }


    public function destroy(Produto $produto)
    {
        //
    }
}
