<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

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
    return view('welcome');
});
Route::get('lang', [\App\Http\Controllers\translate::class, 'index'])->name('lang');
Route::get('lang/change', [\App\Http\Controllers\translate::class, 'change'])->name('lang.change');
