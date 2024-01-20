<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    //All listings
    public function index() {
        return view('recipes.index', [
            'recipes' => Recipe::all()
        ]);
    }

    //One listing
    public function show(Recipe $recipe) {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }
    //show create form
    public function create() {
        return view('recipes.create');
    }
    //store recipe data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('recipes','title')],
            'ingredients'=> 'required',
            'instructions' => 'required',
        ]);

        $formFields['user_id'] = \auth()->user()->id;
        Recipe::create($formFields);

        return redirect('/')->with('message', 'Recept bol pridany uspesne!');
    }

    //show edit form
    public function edit(Recipe $recipe) {
        return view('recipes.edit', ['recipe' => $recipe]);
    }

    //update recipe data
    public function update(Request $request, Recipe $recipe){
        $formFields = $request->validate([
            'title' => 'required',
            'ingredients'=> 'required',
            'instructions' => 'required',
        ]);

        $recipe->update($formFields);

        return back()->with('message', 'Recept bol updatnuty uspesne!');
    }

    //delete listing
    public function destroy(Recipe $recipe){
        $recipe->delete();
        return redirect('/');
    }

}
