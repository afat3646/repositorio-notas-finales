<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Number;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $categories = Category::get();
        //dd($categories);
        return view('categories.Index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Category::create([
        'name'   => $request->name,
        'color'  => str_replace('#','', $request->color),
        'id'=> fake()->randomNumber($request->id)

       ]);
       //return to_route('categories.Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd(Category::where('id',$id)->with('')->first());
        $category = Category::find($id);
        //dump($category);
        $User = User::find($category->$id);
        //dd($User);
        return view('categories.show', compact('category', 'User'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->name,
            'color' => str_replace('#','',$request->color)

        ]);
        return to_route('categories.Index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return to_route('categories.Index');
    }
}
