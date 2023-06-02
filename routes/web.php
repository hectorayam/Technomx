<?php

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product:slug}',function (Product $product) {

   
    return view('products.show', compact('product'));
})->name('product.show');
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('product.search');
Route::get('/product/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/subcategories', [App\Http\Controllers\SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('/subcategory/create', [App\Http\Controllers\SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('/subcategory', [App\Http\Controllers\SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('/subcategory/{subcategory}/edit', [App\Http\Controllers\SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::put('/subcategory/{subcategory}', [App\Http\Controllers\SubcategoryController::class, 'update'])->name('subcategory.update');
Route::delete('/subcategory/{category}', [App\Http\Controllers\SubcategoryController::class, 'destroy'])->name('subcategory.delete');

Route::get('/shop', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');

Route::post('/mail',[App\Http\Controllers\MessagesController::class, 'store'])->name('mail.send');

Route::get('/shop', [App\Http\Controllers\Controller::class, 'shop'])->name('shop');

Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
Route::get('/oder/{order}', [App\Http\Controllers\OrderController::class, 'show'])->name('order.show');
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
Route::get('/order/{order}/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
Route::put('/order/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
Route::delete('/order/{order}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');
Route::delete('/orderitem/{orderitem}', [App\Http\Controllers\OrderController::class, 'delete'])->name('orderitem.delete');

Route::get('/product/category/{c}', [App\Http\ViewComposers\Menu::class, 'find'])->name('product');


Auth::routes();
Route::get('/profile/{user:name}',[App\Http\Controllers\Controller::class, 'auth'])->name('perfil');
Route::put('/profiles/{user}',[App\Http\Controllers\Controller::class, 'change'])->name('perfil.update');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
