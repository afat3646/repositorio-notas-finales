<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Notes;

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
        //$user = User::limit(5)->get();
        

        //dd($user);
        //echo 'Welcome function from Public controller';
        //create method
        //$Notes = Notes::create([
           //'id' => 10,
           //'Title'=>'Hola mundo',
           //'Content' => 'hola mundo',
           //'Bookmark' => true,
         //'Subtitle' =>'hola mundo',
          // 'Created'=>now(),
           //'Updated'=>now()
           
       // ]);

        

        //dd($category);

        //read
        //$Notes = Notes::find(1);
        //$Notes = Notes::all();
        //$Notes = Notes::where( 'id', '<',50)-> get();
        //$Notes = Notes::where( 'id', '<',50)-> first();
     

        //update

        //$Notes = Notes::find(2);
        //$Notes->update([
          // 'Tittle' => 'limpiar escritorio'
        //]);
        //$Notes->update();
        //dd($Notes);

        //Delete

        //$Notes = Notes::find(1);
        //$Notes->delete();


        //echo $Notes[0]->Content;

        

    }

}
