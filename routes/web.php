<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
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
Route::get('/addproduct',function() {
    return view('admin/add-product');
});
Route::get('/viewproduct',function() {
    return view('admin/view-product');
});
Route::get('/categories',[CategoryController::class,'GetCat'])->name('categories'); 
Route::post('addcategory',[CategoryController::class,'AddCategory'])->name('addcategory'); 
Route::get('delcat',[CategoryController::class,'DelCat'])->name('delcat');
Route::get('edite/{id}',[CategoryController::class,'EditeCat']);
Route::post('updatecat',[CategoryController::class,'Updatecat'])->name('updatecat');