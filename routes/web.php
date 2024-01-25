<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Brand\BrandController;

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
Route::get('/create-new-category-form', [CategoryController::class, 'createNewCategoryForm'])->name('Create.New.Category.Form');

Route::get('/products-list', [ProductController::class, 'productsList'])->name('Product.List');
Route::get('/create-new-product-form', [ProductController::class, 'createNewProductForm'])->name('Create.New.Product.Form');

Route::get('/brands-list', [BrandController::class, 'brandsList'])->name('Brand.List');
Route::get('/create-new-brand-form', [BrandController::class, 'createNewBrandForm'])->name('Create.New.Brand.Form');