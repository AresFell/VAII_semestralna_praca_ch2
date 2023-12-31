<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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
});

//Resource routes
//index
//show
//create
//store
//edit
//update
//destroy

//all recipes
Route::get('/recipes', [RecipeController::class, 'index']);

//show create form
Route::get('/recipes/create',[RecipeController::class, 'create'] )->name("recipes.create");

//store recipe data
Route::post('/recipes',[RecipeController::class, 'store'] );

//show edit form
Route::get('/recipes/{recipe}/edit',[RecipeController::class, 'edit']);

//update recipe
Route::put('/recipes/{recipe}',[RecipeController::class, 'update']);

//delete recipe
Route::delete('/recipes/{recipe}',[RecipeController::class, 'destroy']);

//single recipe
Route::get('/recipes/{recipe}',[RecipeController::class, 'show'] );


//show register/create form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

require __DIR__.'/auth.php';
