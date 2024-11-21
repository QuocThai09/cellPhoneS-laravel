<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

Route::get('register',[LoginController::class,'register'])->name('register');

Route::get('',[HomeController::class,'index'])->name('index');
Route::get('/{slug}.html/{color_id?}',[HomeController::class,'detailProduct'])->name('detailProduct');
Route::post('/data-city',[HomeController::class,'dataCity'])->name('data-city');
Route::post('/data-district',[HomeController::class,'dataDistrict'])->name('data-district');
Route::post('/count-store-product',[HomeController::class,'countStoreproduct'])->name('count-store-product');
Route::post('/district-select',[HomeController::class,'districtSelect'])->name('district-select');
Route::post('/provisional-buy-with',[HomeController::class,'provisionalBuyWith'])->name('provisional-buy-with');
Route::post('/extend-warranty',[HomeController::class,'extendWarranty'])->name('extend-warranty');
Route::post('/feedback',[HomeController::class,'feedback'])->name('feedback');

//giỏ hàng
Route::post('/shopping-cart',[HomeController::class,'shoppingCart'])->name('shopping-cart');
Route::post('/filter-school',[LoginController::class,'filterSchool'])->name('filter-school');
Route::post('/check-school-name',[LoginController::class,'checkSchoolName'])->name('check-school-name');