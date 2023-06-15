<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StaticPageController extends Controller
{
    private function popularRecipes()
    {
        return Recipe::orderBy('seen', 'desc')->limit(3)->get();
    }

    public function index(): View
    {
        $recipes = Recipe::latest()->limit(6)->get();
        $tags = Tag::withCount('recipes')->get();

        return view('index', compact('recipes', 'tags'));
    }

    public function about(): View
    {
        $recipes = $this->popularRecipes();
        return view('about', compact('recipes'));
    }

    public function contact(): View
    {
        $recipes = $this->popularRecipes();
        return view('contact', compact('recipes'));
    }

    public function feedback(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string'
        ]);

        Feedback::create($validate);

        return redirect(route('index'));
    }
}
