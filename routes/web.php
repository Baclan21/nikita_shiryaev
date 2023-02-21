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

Route::get('/map', function () {
    return view('map');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/spisoks', function(){
    $spisoks=DB::table('spisoks')->get();
    return view('spisoks',compact('spisoks'));
});
