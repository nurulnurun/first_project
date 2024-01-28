<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productsList()
    {
        // dd('Product List');

        $products = Product::all();
        return view('Backend.Pages.Product.ProductList', compact('products'));
    }

    public function createNewProductForm()
    {
        // dd('Create New Product Form');

        return view('Backend.Pages.Product.CreateNewProductForm');
    }

    public function productStore(Request $Product_Store)
    {
        // dd($Product_Store->all());

        Product::create([
            'id'=>$Product_Store->id,
            'product_id'=>$Product_Store->product_id,
            'product_name'=>$Product_Store->product_name,
            'product_image'=>$Product_Store->product_image,
            'product_price'=>$Product_Store->product_price,
            'product_stock'=>$Product_Store->product_stock,
            'product_status'=>$Product_Store->product_status
        ]);

        return redirect()->route('Product.List');
    }
}
