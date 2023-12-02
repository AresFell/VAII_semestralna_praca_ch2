<?php

use App\Http\Controllers\ProfileController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/recipes', function () {
    return view('recipes', [
        'heading' => 'Latest Recipe',
        'recipes' => Recipe::all()
    ]);
});

//single listing
Route::get('/recipes/{recipe}', function (Recipe $recipe) {
    return view('recipe', [
        'recipe' => $recipe
    ]);
});


require __DIR__.'/auth.php';
