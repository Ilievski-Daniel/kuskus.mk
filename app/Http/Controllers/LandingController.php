<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index(){
        $categories = Category::all();
        $items      = Item::all();
        $smallestCategory = DB::table('categories')->first();
        $smallestCategoryId = $smallestCategory->id;

        return view('landing.index')
            ->with('categories', $categories)
            ->with('items', $items)
            ->with('smallestCategoryId', $smallestCategoryId);
    }
}
