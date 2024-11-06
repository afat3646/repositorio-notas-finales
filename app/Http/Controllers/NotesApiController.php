<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesApiController extends Controller
{
    public function index()
    {
        $notes = Notes::all();
        return response()->json($notes);
    }
    public function show(string $id)
    {
        $notes = Notes::find($id);
        if(!$notes)
        return response()->json([
            'message' => 'Catgegory not found',
            404
         ]);
        return response()->json($notes);
    }
}
