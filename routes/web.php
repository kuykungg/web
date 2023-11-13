<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\frontend\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect() ->route('home');
});
Route::get('/home', [FrontController::class, 'Index'])->name('home');
Route::match(['get','post'],'/product', [FrontController::class, 'productpage'])->name('productspage');
Route::post('/productsortby', [FrontController::class, 'productsortby'])->name('productsortby');
Route::get('/detail/{product_id}', [FrontController::class, 'detail'])->name('detail');

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function(){

    Route::get('/', function () {
        return view('back/dashboard');
    })->name('index');

    Route::get('/datamgr', function () {
        return view('back/datamanagement');
    })->name('datamgr');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//เมนูสินค้า
Route::get('admin/product/index',[ProductController::class, 'index'])->name('admin.product.index');
Route::get('admin/product/create',[ProductController::class, 'create']);
Route::post('admin/product/insert',[ProductController::class, 'insert']);
Route::get('admin/product/edit/{id}',[ProductController::class, 'edit']);
Route::post('admin/product/update/{id}',[ProductController::class, 'update']);
Route::get('admin/product/delete/{id}',[ProductController::class, 'delete']);


//เมนูประเภทสินค้า
Route::get('admin/brand/index',[BrandController::class, 'index']);
Route::get('admin/brand/create',[BrandController::class, 'create']);
Route::post('admin/brand/insert',[BrandController::class, 'insert']);
Route::get('admin/brand/edit/{id}',[BrandController::class, 'edit']);
Route::post('admin/brand/update/{id}',[BrandController::class, 'update']);
Route::get('admin/brand/delete/{id}',[BrandController::class, 'delete']);

//promotion
Route::get('admin/promotion/index',[PromotionController::class, 'index']) ->name('admin.promotion.index');
Route::get('admin/promotion/create',[PromotionController::class, 'create']);
Route::post('admin/promotion/insert',[PromotionController::class, 'insert']);
Route::get('admin/promotion/edit/{id}',[PromotionController::class, 'edit']);
Route::post('admin/promotion/update/{id}',[PromotionController::class, 'update']);
Route::get('admin/promotion/delete/{id}',[PromotionController::class, 'delete']);
