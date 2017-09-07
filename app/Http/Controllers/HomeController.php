<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pantry_Item;
use App\Recipe;
use App\Chore;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pantry_items = Pantry_Item::all();
        $recipes = Recipe::all();
        $chores = Chore::all();
        $pantry_count = count($pantry_items);
        $recipe_count = count($recipes);
        $chore_count = count($chores);
        return view('home')->with('pantry_count', $pantry_count)->with('recipe_count', $recipe_count)->with('chore_count', $chore_count);
    }
}
