<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function index():JsonResponse
    {
        return response()->json(Note::all(), 200);
    }

    public function store(NoteRequest $request):JsonResponse
    {
        Note::created($request->all());
        return response()->json([
            'success' => true
        ], 201);
    }

    public function show(string $id):JsonResponse
    {
        return response()->json(Note::all(), 200);
    }

    public function update(NoteRequest $request, string $id):JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->titile;
        $note->content = $request->content;

        return response()->json([
            'success' => true
        ], 200);
    }

    public function destroy(string $id):JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
