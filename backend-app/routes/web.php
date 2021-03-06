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
    GoodController,
    UploadController,
    RootController,
    LandingController};

Auth::routes();
Route::get('/', [RootController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/landing', [LandingController::class, 'index']);

Route::resource('goods', GoodController::class);
Route::resource('posts', PostController::class);
Route::get('/mountains/pdf', [MountainController::class, 'createPDF']);
Route::resource('mountains', MountainController::class);
Route::resource('cats', CatController::class)->except('show');
Route::resource('breeds', BreedController::class);

Route::get('/upload', [UploadController::class, 'getForm']);
Route::post('/upload', [UploadController::class, 'upload']);

Route::post('/goods/import', [GoodController::class, 'import']);
Route::get('cats/export/', [CatController::class, 'export']);

Route::group(['middleware' => ['web', 'auth']], function () {       
    Route::get('/user', [ProfileController::class, 'index']);
    Route::post('/user', [ProfileController::class, 'saveUserData']);
    Route::post('/user/import', [ProfileController::class, 'import']);

    Route::get('/todo', [ToDoListController::class, 'getTasks']);
    Route::post('/task', [ToDoListController::class, 'addTasks']);
    Route::delete('/task/{task}', [ToDoListController:: class, 'delTasks']);
});



