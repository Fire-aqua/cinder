<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    ToDoListController,
    HomeController,
    PostController,
    MountainController};

Route::get('/', [HomeController::class , 'index']);
Route::get('/post-form', [HomeController::class, 'formPage']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/todo', [ToDoListController:: class, 'getTasks']);
    Route::post('/task', [ToDoListController:: class, 'addTasks']);
    Route::delete('/task/{task}', [ToDoListController:: class, 'delTasks']);
    
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/posts/{id}', [PostController::class, 'getPost']);
    Route::post('/posts', [PostController::class, 'savePost']);
});

Route::get('/mountains', [MountainController::class, 'index']);
Route::post('/mountains', [MountainController::class, 'create']);
Route::delete('/mountains/{id}',[MountainController::class, 'delete']);
