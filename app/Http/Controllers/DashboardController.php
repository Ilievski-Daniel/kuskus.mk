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

        return redirect()->back()->with('success', 'Нова храна/пијалок со име "' . $request->name . '" е успешно додадена во менито!');
    }
    
    public function listCategories(){
        $categories = Category::all();
        return view('auth.dashboard.list_categories')->with('categories', $categories);;
    }

    public function deleteCategory(Request $request){
        $category = Category::findOrFail($request->deleteCategoryID);
        $category->delete();
        return redirect()->back()->with('success', 'Категоријата е успешно избришана!');
    }

    public function editCategory(Request $request){
        $category = Category::find($request->editCategoryID);
        return view('auth.dashboard.edit_category')->with('category', $category);
    }

    public function updateCategory(CreateCategoryRequest $request){
        Category::where('id', $request->categoryID)
            ->update([
                'name' => $request->name
            ]);

        return redirect()->back()->with('success', 'Категоријата е успешно изменета!'); 
    }

    public function listItems(){
        $items = Item::all();
        $categories = Category::all();
        return view('auth.dashboard.list_items')->with('items', $items)->with('categories', $categories);
    }

    public function deleteItem(Request $request){
        $item = Item::findOrFail($request->deleteItemID);
        $item->delete();
        return redirect()->back()->with('success', $item['name'] . "е успешно избришан/а од менито!");
    }

    public function editItem(Request $request){
        $item = Item::where('id', $request->editItemID)->first();
        $categories = Category::all();
        return view('auth.dashboard.edit_item')->with('item', $item)->with('categories', $categories);
    }

    public function updateItem(CreateItemRequest $request){
        Item::where('id', $request->itemID)
            ->update([
                'name'          => $request->name,
                'price'         => $request->price,
                'description'   => $request->description,
                'category_id'   => $request->category
            ]);

        return redirect()->back()->with('success', 'Храната/Пијалокот е успешно изменет!'); 
    }
}
