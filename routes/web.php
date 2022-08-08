<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/',function(){
    return view('welcome');
})-> name('welcome');

Route::get('/users', [UserController::class,'index'])-> name('users.index');
Route::get('/users/create', [UserController::class,'create'])-> name('users.create');
Route::get('/users/{id}/edit', [UserController::class,'edit'])-> name('users.edit');
Route::get('/users/show/{id}', [UserController::class,'show'])->where('id','[0-9]+') -> name('users.show');
Route::post('/users', [UserController::class,'store'])-> name('users.store');
Route::put('/users/{id}', [UserController::class,'update'])-> name('users.update');
Route::delete('/users/{id}', [UserController::class,'destroy'])-> name('users.destroy');


Route::get('/posts', [PostController::class,'index'])-> name('posts.index');
Route::get('/posts/create', [PostController::class,'create'])-> name('posts.create');
Route::get('/posts/{id}/edit', [PostController::class,'edit'])-> name('posts.edit');
Route::get('/posts/show/{id}', [PostController::class,'show'])->where('id','[0-9]+') -> name('posts.show');
Route::post('/posts/store', [PostController::class,'store'])-> name('posts.store');
Route::put('/posts/{id}', [PostController::class,'update'])-> name('posts.update');
Route::delete('/posts/{id}', [PostController::class,'destroy'])-> name('posts.destroy');
Route::post('/posts/delete', [PostController::class,'delete'])-> name('posts.delete');
Route:: fallback(function(){
    return view('welcome');
});