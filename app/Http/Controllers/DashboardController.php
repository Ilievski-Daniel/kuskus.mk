<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function createCategoryView(){
        return view('auth.dashboard.create_category');
    }

    public function createCategory(Request $request){
        $category = new Category(); 
        $category->name = $request->category;
        $category->save();

        return redirect()->back()->with('success', 'Вашата нова категорија "' . $request->category . '" е успешно додадена во менито!');
    }

    public function createItemView(){
        return view('auth.dashboard.create_item');
    }

    public function createItem(Request $request){
        $item = new Item(); 
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->save();

        return redirect()->back()->with('success', 'Нова храна со име "' . $request->name . '" е успешно додадена во менито!');
    }
    
}
