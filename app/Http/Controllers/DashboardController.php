<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function createCategoryView(){
        return view('auth.dashboard.create_category');
    }

    public function createCategory(Request $request){
        $user = new Category(); 
        $user->category = $request->category;
        $user->save();

        return redirect()->back()->with('success', 'Вашата нова категорија "' . $request->category . '" е успешно додадена во менито!');
    }
}
