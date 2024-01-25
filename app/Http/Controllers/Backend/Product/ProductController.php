<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productsList()
    {
        // dd('Product List');

        return view('Backend.Pages.Product.ProductList');
    }

    public function createNewProductForm()
    {
        // dd('Create New Product Form');

        return view('Backend.Pages.Product.CreateNewProductForm');
    }
}
