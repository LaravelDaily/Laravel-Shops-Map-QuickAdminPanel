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
            ->where('active', 1)
            ->get()
            ->map(function($shop) {
                $shop->photo = $shop->getFirstMediaUrl('photos', 'thumb');
                return $shop;
            });

        $mapShops = $shops->makeHidden(['id', 'active', 'created_at', 'updated_at', 'deleted_at', 'created_by_id', 'photos', 'media']);

        return view('home', compact('categories', 'shops', 'mapShops'));
    }

        return view('home', compact('categories', 'shops'));
    }
}
