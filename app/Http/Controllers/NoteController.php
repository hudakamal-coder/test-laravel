<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use Illuminate\Auth\Events\Validated;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function show($id)
    {
        $note = Note::find($id);

        return view('notes.show', compact('note'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(NoteRequest $request)
    {
        $validatedData = $request->validated();

        Note::create([
            'title'=>$request->title,
            'message'=>$request->message
        ]);

        return redirect()->route('notes.index');
    }

    public function edit($id)
    {
        $note = Note::find($id);

        return view('notes.edit', compact('note'));
    }

    public function update(NoteRequest $request, $id)
    {
        $validatedData = $request->validated();

        Note::find($id)->update([
            'title'=>$request->title,
            'message'=>$request->message
        ]);

        return redirect()->route('notes.index');
    }

    public function destroy($id)
    {
        Note::find($id)->delete();

        return redirect()->route('notes.index');
    }
}
