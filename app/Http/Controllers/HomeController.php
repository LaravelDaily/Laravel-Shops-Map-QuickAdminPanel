<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shop;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $shops = Shop::with(['media', 'categories'])->get();

        return view('home', compact('categories', 'shops'));
    }
}
