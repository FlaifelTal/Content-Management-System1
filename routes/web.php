<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\albumController;
use App\Http\Controllers\contactUsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\privacyController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\termsController;
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
    return view('home');
});

Route::get('home',[homeController::class,'index'])->name('home');
Route::get('about',[aboutUsController::class,'index'])->name('aboutUs');
Route::get('album',[albumController::class,'index'])->name('album');
Route::get('contact',[contactUsController::class,'index'])->name('contact');
Route::POST('contact',[contactUsController::class,'handlecontact'])->name('contact.submit');

Route::get('portfolio',[portfolioController::class,'index'])->name('portfolio');
Route::get('privacy',[privacyController::class,'index'])->name('privacy');
Route::get('services',[servicesController::class,'index'])->name('services');
Route::get('terms',[termsController::class,'index'])->name('terms');
//must be before the main source route 
Route::get('/post/trash',[postcontroller::class,'trashed'])->name('post.trashed');
Route::get('/post/{id}/restore',[postcontroller::class,'restore'])->name('post.restore');
Route::delete('/post/{id}/forceDelete',[postcontroller::class,'forceDelete'])->name('post.forceDelete');

Route::resource('post',postcontroller::class);
