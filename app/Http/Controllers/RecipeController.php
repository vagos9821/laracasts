<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::paginate(1);

        return view('training.recipe.index', [
            'recipes' => $recipes,
        ]);
    }
}
