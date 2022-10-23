<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Ocupante;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mesas = Mesa::latest('updated_at')->with('ocupantes:id,nome,mesa_id')->search($request)->paginate(3) ->withQueryString();;

        $total = FacadesDB::table('mesas')->sum('consumo');
        return view('Admin.mesas.index', compact('mesas', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mesa = Mesa::findOrFail($id);


        return view('Admin.mesas.show', compact('mesa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $mesa = Mesa::findOrFail($id);
        $ocupantes = Ocupante::orderBy('nome')->get();
        $produtos = Produto::all();

        return view('Admin.mesas.edit', compact('ocupantes', 'produtos', 'mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mesa = Mesa::findOrFail($id);
        $mesa->consumo = $request->consumo;
        $mesa->update();

        return redirect()->route('mesas.index', $mesa->id)->with('success', 'Produto adicionado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
