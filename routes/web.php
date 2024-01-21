<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadManager;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/recipes/{recipe}/comments', [CommentController::class, 'store'])->name('comments.store');
});

//Search recipe
Route::get('/recipes/search', [RecipeController::class, 'search'])->name('recipes.search');

//Delete of a comment
Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

//Load (create) a post
Route::get("/upload", [UploadManager::class, "upload"])->name("upload");

//Upload a post
Route::post("/upload", [UploadManager::class, "uploadPost"])->name("upload.post");

//Delete a post
Route::get('/post/delete/{id}', [UploadManager::class, "delete"])->name("delete");

//Edit a post
Route::get('/post/edit/{id}', [UploadManager::class, "edit"])->name('edit');
Route::put('/post/update/{id}', [UploadManager::class, "update"])->name('update');

//Get all recipes
Route::get('/recipes', [RecipeController::class, 'index']);

//Show create form for recipes
Route::get('/recipes/create',[RecipeController::class, 'create'] )->name("recipes.create")->middleware("auth");

//Store recipe data
Route::post('/recipes',[RecipeController::class, 'store'])->middleware("auth");

//Show edit form for recipes
Route::get('/recipes/{recipe}/edit',[RecipeController::class, 'edit'])->middleware("auth");

//Update this recipe
Route::put('/recipes/{recipe}',[RecipeController::class, 'update'])->middleware("auth");

//Delete this recipe
Route::delete('/recipes/{recipe}',[RecipeController::class, 'destroy'])->middleware("auth");

//Get single recipe
Route::get('/recipes/{recipe}',[RecipeController::class, 'show'] );

//Show register/create form
Route::get('/register', [UserController::class, 'create']);

//Create a new user
Route::post('/users', [UserController::class, 'store']);

require __DIR__.'/auth.php';
