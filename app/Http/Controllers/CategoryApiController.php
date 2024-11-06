<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryApiController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    
     public function index()
     {
         $categories = Category::all();
         //dd($categories);
         return response()->json($categories);

     }
     public function show(string $id)
     {
         $category = Category::find($id);
         
         if(!$category)
         return response()->json([
            'message' => 'Category not found',
            404
         ]);
         return response()->json($category);
     }

}
