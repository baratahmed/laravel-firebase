<?php

use App\Http\Controllers\Firebase\ContactController;
use Illuminate\Support\Facades\Route;

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
});

Route::get('/contacts',[ContactController::class,'index'])->name('contacts');
Route::get('/contact/create',[ContactController::class,'create'])->name('contact.create');
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('/contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
Route::put('/contact/update/{id}',[ContactController::class,'update'])->name('contact.update');
Route::delete('/contact/delete/{id}',[ContactController::class,'destroy'])->name('contact.delete');
