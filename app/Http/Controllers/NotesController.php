<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Notes::get();
        return view('notes.Index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Notes::create([
            'Title'=> $request->Title, 
            'Content'=>$request->Content,
            'Subtitle'=>$request->Subtitle

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $notes = Notes::find($id);
        return view('notes.show', compact('notes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $notes = Notes::find($id);
        return view('notes.edit', compact('notes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $notes = Notes::find($id);
        $note->update([
            'Title'=>$request->Title,
            'Content'=> str_replace($request->Content),
            'Subtitle'=>str_replace($request->Subtitle)
        ]);
        return to_route('notes.Index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notes = Notes::find($id);
        $notes ->delete();
        return to_route('notes.Index');
    }
}
