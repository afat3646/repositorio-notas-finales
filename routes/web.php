<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UserController;


Route::get('/', [PublicController::class, 'welcome']);

Route::resource('categories',CategoryController::class);
Route::resource('folders', FolderController::class);
Route::resource('notes', NotesController::class);
Route::resource('users',UserController::class);

//Route::post('/retrive-info',[hola, 'hola']);
//Route::resource