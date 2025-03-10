<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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
    return view('home');
});

// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('/master', [PageController::class, 'index']);

Route::group(['prefix' => 'shopper'], function(){
    Route::get('/home', function(){
        return view('shopper.shop');
    });
    Route::get('/blog', function(){
        return view('shopper.blog');
    });
    Route::get('/blog-single', function(){
        return view('shopper.blog-single');
    });
});
Route::get('/database', function(){
    Schema::create('products', function($table){
        $table->increments('id');
        $table->string('name');
        $table->float('price', 10, 2);
        $table->string('image', 250);
    });
    echo 'products table created";';
});


Route::group(['prefix' => 'database'], function(){
    Route::get('/product',[DatabaseController::class, 'createProduct']);
    Route::get('/articles',[DatabaseController::class, 'createArticles']);   
    Route::get('/bill',[DatabaseController::class, 'createBill']);   
    Route::get('/bill-detail',[DatabaseController::class, 'createBillDetail']);   
    Route::get('/category',[DatabaseController::class, 'createCategory']);   
    Route::get('/comment',[DatabaseController::class, 'createComment']);   
    Route::get('/customer',[DatabaseController::class, 'createCustomer']);   
    Route::get('/dummies',[DatabaseController::class, 'createDummies']);   
    Route::get('/failed-job',[DatabaseController::class, 'createFailedJob']);   
});

Route::get('/trangchu', [PageController::class, 'getIndex']);
Route::get('/page/product', [ProductController::class, 'getAllProduct']);