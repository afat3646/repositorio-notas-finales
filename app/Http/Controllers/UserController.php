<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userse = User::get();
        return view('users.Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.Index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->username

        ]);
        return to_route('users.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userse = User::findd($id);
        return view('users.Index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $userse = User::find($id);
        return view('users.edit'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userse = User::find($id);
        $userse->update([
            'name'=>$request->name,
            'username'=>str_replace($request->username),
            'email'=>str_replace($request->email),
            'password'=>str_replace($request->password)
        ]);
        return to_route('users.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userse = User::find($id);
        $userse->delete();
        return to_route('users.index');
    }
}
