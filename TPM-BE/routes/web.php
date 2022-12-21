<?php
use App\Http\Controllers\ProductController;
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


Route::get('/home', [ProductController::class, 'index'])->name('index');
Route::get('/create-product', [ProductController::class, 'create'])->name('create');
Route::post('/store-product', [ProductController::class,'store'])->name('store');
Route::get('/show-product/{id}', [ProductController::class, 'show'])->name('show');
Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit');
Route::patch('/update-product/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/delete-product/{id}', [ProductController::class, 'delete'])->name('delete');

