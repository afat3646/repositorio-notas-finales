<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
class FolderApiController extends Controller
{
    public function index()
    {
        $folders = Folder :: all();
        return response()->json($folders);

    }
    public function show(string $id)
    {
        $folders = Folder::find($id);
        if(!$folders)
        return response()->json([
            'message' => 'Folder not found',
            404
         ]);
        return response()->json($folders);
    }
}
