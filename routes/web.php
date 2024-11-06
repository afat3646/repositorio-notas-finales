<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\FolderApiController;
use App\Http\Controllers\NotesApiController;

Route::get('/', [PublicController::class, 'welcome']);

Route::resource('categories',CategoryController::class);
Route::resource('folders', FolderController::class);
Route::resource('notes', NotesController::class);
Route::resource('users',UserController::class);

//API routes

Route::get('/api/categories',[CategoryApiController::class, 'Index']);
Route::get('/api/category/{id}',[CategoryApiController::class, 'show']);
Route::get('/api/folders', [FolderApiController::class, 'index']);
Route::get('/api/folders/{id}',[FolderApiController::class, 'show']);
Route::get('/api/notes', [NotesApiController::class, 'index']);
Route::get('/api/notes/{id}',[NotesApiController::class, 'show']);

//Route::post('/retrive-info',[hola, 'hola']);
//Route::resource