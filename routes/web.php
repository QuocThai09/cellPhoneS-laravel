<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('',[HomeController::class,'index'])->name('index');
Route::get('/{slug}.html',[HomeController::class,'detailProduct'])->name('detailProduct');
Route::post('/data-city',[HomeController::class,'dataCity'])->name('data-city');
Route::post('/data-district',[HomeController::class,'dataDistrict'])->name('data-district');
Route::post('/count-store-product',[HomeController::class,'countStoreproduct'])->name('count-store-product');
Route::post('/district-select',[HomeController::class,'districtSelect'])->name('district-select');
Route::post('/provisional-buy-with',[HomeController::class,'provisionalBuyWith'])->name('provisional-buy-with');
