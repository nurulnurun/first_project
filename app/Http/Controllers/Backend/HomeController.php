<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeController()
    {
        // dd('Home Page');

        return view('Backend.Master');
    }
}
