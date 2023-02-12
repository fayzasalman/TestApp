<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::with('products')->get();
        $catTab = isset($request->id) ? $request->id : $category->first()->id;
        return view()->exists('welcome') ? view('welcome', compact('category', 'catTab')) : '';
    }
}
