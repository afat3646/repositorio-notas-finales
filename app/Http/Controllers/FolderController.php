<?php

namespace App\Http\Controllers;


use App\Models\Folder;
use Illuminate\Http\Request;
use App\Models\Notes;

class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $folders = Folder :: get();
        return view('folders.Index', compact('folders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('folders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Folder::create([
            'name'=> $request->name,
            'id'=>fake()->randomNumber($request->id),
        ]);
        return to_route('folders.Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $folders = Folder::find($id);
        $notes = Notes::find($folders ->$id);
        return view('folders.show', compact('folders','notes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $folders = Folder::find($id);
        return view('folders.edit', compact('folders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $folders = Folder::find($id);
        $folders->update([
            'name'=>$request->name,
            'id'=>fake()->randomNumber($request->id)
        ]);
        return to_route('folders.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $folders = Folder::find($id);
        $folders->delete();
        return to_route('folders.Index');
    }
}
