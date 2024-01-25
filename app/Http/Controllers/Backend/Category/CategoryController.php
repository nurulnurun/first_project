<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoriesList()
    {
        // dd('Category List');

        $categories = Category::all();
        return view('Backend.Pages.Category.CategoriesList', compact('categories'));
    }

    public function createNewCategoryForm()
    {
        // dd('Create New Category Form');

        return view('Backend.Pages.Category.CreateNewCategoryForm');
    }

    public function categoryStore(Request $Category_Store)
    {
        // dd($Category_Store->all());

        Category::create([
            'id'=>$Category_Store->id,
            'category_id'=>$Category_Store->category_id,
            'category_name'=>$Category_Store->category_name,
            'category_description'=>$Category_Store->category_description
        ]);

        return redirect()->route('Category.List');
    }
}
