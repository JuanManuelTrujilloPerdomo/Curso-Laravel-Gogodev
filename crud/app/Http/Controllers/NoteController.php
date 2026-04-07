<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{

    /*

    C = Crear
    R = Leer
    U = Actualizar
    D = Eliminar

    */

    public function index()
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create()
    {
        return view('note.create');
    }

    public function store(Request $request)
    {
/*         // Opción 1 de guardar los datos
        $note = new Note;
        $note->title = $request->title;
        $note->description = $request->description;
        $note->save();

        // Opción 2 de guardar los datos
        Note::create([
            'title' => $request->title,
            'description' => $request->description

        ]); */

        // Opción 3 de guardar los datos utilizando todos los datos de la petión recepcionada
        Note::create($request->all());

        return redirect()->route('note-index');
    }

    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }


}
