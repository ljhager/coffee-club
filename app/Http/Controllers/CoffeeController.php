<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function getIndex()
    {
        $coffee = Coffe::all();
        return view('coffee.index', ['coffee' => $products]);
    }
}
