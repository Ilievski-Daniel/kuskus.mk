<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $categories = Category::all();
        $items      = Item::all();
        
        return view('landing.index')
            ->with('categories', $categories)
            ->with('items', $items);
    }
}
