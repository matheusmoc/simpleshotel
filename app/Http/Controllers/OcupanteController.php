<?php

namespace App\Http\Controllers;

use App\Models\Ocupante;
use Illuminate\Http\Request;

class OcupanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ocupantes = Ocupante::orderBy('id', 'DESC')->paginate(8);
        return view('Admin.ocupantes.index', compact('ocupantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ocupantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocupante  $ocupante
     * @return \Illuminate\Http\Response
     */
    public function show(Ocupante $ocupante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocupante  $ocupante
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocupante $ocupante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ocupante  $ocupante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ocupante $ocupante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ocupante  $ocupante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocupante $ocupante)
    {
        //
    }
}
