<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\PremiumRecipe;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use function PHPSTORM_META\map;
use function PHPUnit\Framework\isEmpty;

class RecipeController extends Controller
{
    public function recipes(): View
    {
        $recipes = Recipe::all();
        $tags = Tag::withCount('recipes')->get();

        return view('recipe.recipes', compact('recipes', 'tags'));
    }

    public function show(Recipe $recipe): View
    {
        return view('recipe.recipe', compact('recipe'));
    }

    public function tags(): View
    {
        $tags = Tag::withCount('recipes')->get();
        return view('recipe.tags', compact('tags'));
    }

    public function tag(Tag $tag): View
    {
        // dd($tag->recipes()->get());
        $recipes = $tag->recipes()->get();
        return view('recipe.tag', compact('tag', 'recipes'));
    }

    public function premium(): View
    {
        $premium_recipes = PremiumRecipe::all();

        if (Auth::check()) {
            $premium_recipes = $premium_recipes->map(function ($recipe) {
                $history = Payment::where('user_id', Auth::user()->id)->where('premium_recipe_id', $recipe->id)->first();
                $recipe->status = $history ? true : false;
                return $recipe;
            });
        }

        return view('recipe.premium', compact('premium_recipes'));
    }

    public function payment($recipe): View
    {
        return view('recipe.payment', compact('recipe'));
    }

    public function transaction(Request $request, $recipe)
    {
        $validate = $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required|numeric',
            'name_on_card' => 'required',
            'cc_number' => 'required|numeric',
            'exp_month' => 'required',
            'exp_year' => 'required',
            'cvv' => 'required',
        ]);

        $validate['premium_recipe_id'] = $recipe;
        $validate['user_id'] = Auth::user()->id;
        $validate['email'] = Auth::user()->email;

        Payment::create($validate);

        return redirect(route('premium'));
    }
}
