<?php

namespace App\Http\Controllers\Backend\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoriesList()
    {
        // dd('Category List');

        return view('Backend.Pages.Category.CategoriesList');
    }

    public function createNewCategoryForm()
    {
        // dd('Create New Category Form');

        return view('Backend.Pages.Category.CreateNewCategoryForm');
    }
}
