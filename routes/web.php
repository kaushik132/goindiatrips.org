<?php

use App\Http\Controllers\HomeController;
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



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about-us',[HomeController::class,'aboutUs'])->name('about-us');
Route::get('gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('tour-and-package',[HomeController::class,'tourandpackage'])->name('tour-and-package');
Route::get('tour-details',[HomeController::class,'tourdetails'])->name('tour-and-package');
Route::get('contact-us',[HomeController::class,'cont
actUs'])->name('contact-us');
