<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index ()
    {
        // Este metodo me trae todos los registros
        $users = User::all();

        // Este le pasa un array con los datos de la variable users a la vista
        return view('user.index', compact('users'));
    }
}
