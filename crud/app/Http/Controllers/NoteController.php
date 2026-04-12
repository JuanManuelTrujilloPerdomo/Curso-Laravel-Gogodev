<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

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

    public function store(NoteRequest $request): RedirectResponse // Le decimos al controlador que espero un Noterequest ya con los datos validados
    {
        Note::create($request->all());
        return redirect()->route('note-index')->with('success', 'Note creaded'); // Mensaje para cuando se o no registren datos.
    }

    public function edit(Note $note): view
    {
        return view('note.edit', compact('note'));
    }

    public function update(NoteRequest $request, Note $note): RedirectResponse // Le decimos al controlador que espero un Noterequest ya con los datos validados
    {
        $note->update($request->all());
        return redirect()->route('note-index')->with('success', 'Note update'); // Mensaje cuando se o no registren datos.
    }

    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

        public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note-index')->with('danger', 'Note delete'); // Mensaje de alert para cuando se o no registren datos.
    }

}
