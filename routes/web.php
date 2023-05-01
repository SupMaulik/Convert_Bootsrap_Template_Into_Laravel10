<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FeaturesController;
use App\Http\Controllers\frontend\PricingController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\singleController;
use App\Http\Controllers\photoController;


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
Route::get('/',function(){
    return view('frontend.index');
});
Route::get('/home',[HomeController::class,'index']);
Route::get('/features',[FeaturesController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/price',[PricingController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/single',singleController::class);
Route::resource('/photo',photoController::class);


