<?php

use App\Http\Controllers\Paymentcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\addtrancontroller;
use App\Models\addtran;
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

Route::get('admin',function(){
    return view('admin/admin');
}
);
Route::put('/addtran',[App\Http\Controllers\addtrancontroller::class,'store'])->name('addtran');