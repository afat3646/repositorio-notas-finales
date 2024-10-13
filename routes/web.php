<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FolderController;
use app\Http\Controllers\NotesController;


Route::get('/', [PublicController::class, 'welcome']);

Route::resource('categories',CategoryController::class);
Route::resource('folders', FolderController::class);
Route::resource('notes', FolderController::class);


//Route::post('/retrive-info',[hola, 'hola']);
//Route::resource