<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PublicController extends Controller
{
    public function welcome(){
        //$category = Category ::all();
        //dd($category);
        //$user = User::all();
        //$user = User::where('email', 'test@example.com')->get();
        //$user = User::find(1);
        //$user = User::select('name', 'email')->get();
        //$user = User::orderBy('name', 'asc')->get();
        $user = User::limit(5)->get();
        

        dd($user);

    }
}
