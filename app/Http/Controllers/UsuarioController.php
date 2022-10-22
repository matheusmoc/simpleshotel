<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $listaUsuarios = User::orderBy('id', 'DESC')->paginate(8);

        return view('Admin.usuarios.index', compact('listaUsuarios'));
    }
}
