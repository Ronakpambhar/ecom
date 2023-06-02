<?php

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
    return view('admin.index');
});
Route::get('/categories', function () {
    return view('admin.categories');
});
Route::get('/subcategries', function () {
    return view('admin.subcategries');
});
Route::get('/layout', function () {
    return view('admin.content.layout');
});
