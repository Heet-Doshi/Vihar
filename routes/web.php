<?php

use App\Http\Controllers\Paymentcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\addtrancontroller;
use App\Models\addtran;
use App\Models\admin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\hotwatercontroller;
use App\Http\Controllers\retrivehotwatercontroller;
use App\Http\Controllers\guidecontroller;
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
    return view('index');
});

Auth::routes();    

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::post('/addhotwater',[\App\Http\Controllers\hotwatercontroller::class,'store'])->name('addhotwater');


Route::get('admin',function(){
    return view('admin/admin');
}
);
Route::get('/addtran',[App\Http\Controllers\addtrancontroller::class,'store'])->name('addtran');
Route::get('hotwater',function (){
    return view('hotwater');
});
Route::get('hotwater2',[App\Http\Controllers\hotwatercontroller::class,'index'])->name('hotwater2'); 

Route::get('findhotwater',[App\Http\Controllers\retrivehotwatercontroller::class,'index']);
Route::get('findhotwatershow', [\App\Http\Controllers\hotwatercontroller::class, 'show']);
Route::get('/contact',function (){
    return view('contact');
});
Route::get('/guide',function()
{
    return view('guidehome');
});
Route::post('/supply',[\App\Http\Controllers\guidecontroller::class,'store'])->name('supply');
Route::get('/guidesupply',function()
{
    return view('supplyguide');
});