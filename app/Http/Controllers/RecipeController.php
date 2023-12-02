<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //All listings
    public function index() {
        return view('recipes', [
            'heading' => 'Latest Recipe',
            'recipes' => Recipe::all()
        ]);
    }

    //One listing
    public function show(Recipe $recipe) {
        return view('recipe', [
            'recipe' => $recipe
        ]);
    }
    //show create form
    public function create() {
        return view('recipes.create');
    }
}
