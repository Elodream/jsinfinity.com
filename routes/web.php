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

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('about', function () {
    return view('about');
})->name("info");

Route::get('about/partners', function () {
    return view('aboutpartners');
})->name("partners");

Route::get('about/policies', function () {
    return view('aboutpolicies');
})->name("policies");

Route::get('about/gallery', function () {
    return view('gallery');
})->name("gallery");

Route::get('docs', function () {
    return view('docs');
})->name("docs");


Route::get('news', function () {
    return view('news');
})->name("news");


Route::get('download', function () {
    return view('download');
})->name("download");


