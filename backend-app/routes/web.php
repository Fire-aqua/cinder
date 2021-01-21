<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    ToDoListController,
    HomeController,
    PostController,
    MountainController,
    CatController,
    BreedController,
    ProfileController,
    GoodController};

Route::get('/', [HomeController::class , 'index']);
Route::get('/post-form', [HomeController::class, 'formPage']);

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/todo', [ToDoListController:: class, 'getTasks']);
    Route::post('/task', [ToDoListController:: class, 'addTasks']);
    Route::delete('/task/{task}', [ToDoListController:: class, 'delTasks']);

    Route::get('/user', [ProfileController::class, 'index']);
    Route::post('/user', [ProfileController::class, 'saveUserData']);

    Route::resource('goods', GoodController::class);

    Route::resource('posts', PostController::class);
    Route::resource('mountains', MountainController::class);
    Route::resource('cats', CatController::class);
    Route::resource('breeds', BreedController::class);
});



