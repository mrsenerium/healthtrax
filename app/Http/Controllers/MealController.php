<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MealController extends Controller
{
    public function create()
    {
        return view('pages.meals.create');
    }
}
