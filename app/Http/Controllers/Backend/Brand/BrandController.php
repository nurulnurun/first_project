<?php

namespace App\Http\Controllers\Backend\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandsList()
    {
        // dd('Brands List');

        return view('Backend.Pages.Brand.BrandList');
    }

    public function createNewBrandForm()
    {
        // dd('Create New Brand Form');

        return view('Backend.Pages.Brand.CreateNewBrandForm');
    }
}
