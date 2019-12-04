<?php

namespace App\Http\Controllers;

use App\Category;
use App\Shop;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $shops = Shop::with(['categories', 'days'])
            ->searchResults()
            ->paginate(9);

        $mapShops = $shops->makeHidden(['active', 'created_at', 'updated_at', 'deleted_at', 'created_by_id', 'photos', 'media']);
        $latitude = $shops->count() && (request()->filled('category') || request()->filled('search')) ? $shops->average('latitude') : 51.5073509;
        $longitude = $shops->count() && (request()->filled('category') || request()->filled('search')) ? $shops->average('longitude') : -0.12775829999998223;

        return view('home', compact('categories', 'shops', 'mapShops', 'latitude', 'longitude'));
    }

    public function show(Shop $shop)
    {
        $shop->load(['categories', 'days']);

        return view('shop', compact('shop'));
    }
}
