<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'HomeController'])->name('admin.home');

Route::get('/categories-list', [CategoryController::class, 'categoriesList'])->name('Category.List');
Route::get('/create-new-category-form', [CategoryController::class, 'createNewCategoryForm'])->name('Category.New.Form');

Route::get('/product-list', [ProductController::class, 'productsList'])->name('Product.List');
Route::get('/create-new-product-form', [ProductController::class, 'createNewProductForm'])->name('product.new.form');