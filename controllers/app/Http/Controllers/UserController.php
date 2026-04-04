<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Este metodo me trae todos los registros
        $users = User::all();

        // Este le pasa un array con los datos de la variable users a la vista
        return view('user.index', compact('users'));
    }

    public function create()
    {
        // Primer forma de crear usuarios directo en el controlador
        $user = new User;
        $user->name = "Juan Manuel Trujillo";
        $user->email = "juanperdomotorre.13@gmail.com";
        $user->password = Hash::make(123456);
        $user->age = 23;
        $user->address = "Carrera 20 # 65 - 36";
        $user->zip_code = 290909;
        $user->save();

        // Segunda forma de crear usuarios directo en el controlador
        User::create([
            "name" => "Liseth Polo",
            "email" => "lizreina0126@gmail.com",
            "password" => Hash::make(123456),
            "age" => 22,
            "address" => "Calle 1 # 23 -45",
            "zip_code" => 280808
        ]);

        User::create([
            "name" => "Kayser Alfonso",
            "email" => "alfonsoreina@gmail.com",
            "password" => Hash::make(123456789),
            "age" => 22,
            "address" => "Calle 23 # 23 -45",
            "zip_code" => 270707
        ]);

        // Redirecciono hacia la ruta raiz sin tener que crear una nueva vista
        return redirect()->route('user-index');
    }
}
