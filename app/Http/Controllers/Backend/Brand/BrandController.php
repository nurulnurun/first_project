<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function brandsList()
    {
        // dd('Brands List');

        $brands = Brand::all();
        return view('Backend.Pages.Brand.BrandList', compact('brands'));
    }

    public function createNewBrandForm()
    {
        // dd('Create New Brand Form');

        return view('Backend.Pages.Brand.CreateNewBrandForm');
    }

    public function brandStore(Request $Brand_Store)
    {
        // dd($Brand_Store->all());

        Brand::create([
            'id'=>$Brand_Store->id,
            'brand_id'=>$Brand_Store->brand_id,
            'brand_name'=>$Brand_Store->brand_name,
            'brand_status'=>$Brand_Store->brand_status,
            'brand_image'=>$Brand_Store->brand_image,
            'brand_description'=>$Brand_Store->brand_description
        ]);

        return redirect()->route('Brand.List');
    }
}
