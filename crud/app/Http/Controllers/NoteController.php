<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NoteController extends Controller
{

    /*

    C = Crear
    R = Leer
    U = Actualizar
    D = Eliminar

    */

// Estamos tipando la funcion con : view
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): view
    {
        return view('note.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Reglas de Validación de datos antes de ser insertados
        $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:255|min:3'
        ]);
        Note::create($request->all());
        return redirect()->route('note-index');
    }

    public function edit(Note $note): view
    {
        return view('note.edit', compact('note'));
    }

    public function update(Request $request, Note $note): RedirectResponse
    {
        // Reglas de Validación de datos antes de ser insertados
        $request->validate([
            'title' => 'required|max:255|min:3',
            'description' => 'required|max:255|min:3'
        ]);
        $note->update($request->all());
        return redirect()->route('note-index');
    }

    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

        public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note-index');
    }

}
