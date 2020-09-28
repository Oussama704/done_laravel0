<?php

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


Auth::routes();
Route::get('/poster_annonce',function(){
    return view('poster_annonce');
})->name('home');
Route::get('/show',function(){
    return view('show');
})->name('show');
Route::get('/',function(){
    return view('acceuil');
});
Route::resource('/post','App\Http\Controllers\PostController')->only("index","create","store","show");
Route::resource('/Mpost','App\Http\Controllers\MyPostController')->only("show","edit","update","destroy");
Route::resource('/posts','App\Http\Controllers\RechController')->only("index");

