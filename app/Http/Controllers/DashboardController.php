<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\CreateItemRequest;
use App\Http\Requests\CreateCategoryRequest;


class DashboardController extends Controller
{
    public function createCategoryView(){
        return view('auth.dashboard.create_category');
    }

    public function createCategory(CreateCategoryRequest $request){
        $category = new Category(); 
        $category->name = $request->name;
        $category->save();

        return redirect()->back()->with('success', 'Вашата нова категорија "' . $request->name . '" е успешно додадена во менито!');
    }

    public function createItemView(){
        $categories = Category::all();
        return view('auth.dashboard.create_item')->with('categories', $categories);
    }

    public function createItem(CreateItemRequest $request){
        $item = new Item(); 
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->save();

        return redirect()->back()->with('success', 'Нова храна со име "' . $request->name . '" е успешно додадена во менито!');
    }
    
}
