<?php

use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
get = form post = hide info
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|  auth.login
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/user/index',[UserController::class,  'index']);

Route::get('admin/category/index',[CategoryController::class,  'index']);
Route::get('admin/category/createform',[CategoryController::class,  'createform'])->name('make.cat');
Route::get('admin/category/edit',[CategoryController::class,  'edit'])->name('edit.cat');

Route::get('admin/product/index',[ProductController::class,  'index']);
Route::get('admin/product/createform',[ProductController::class,  'createform'])->name('make.pro');
Route::get('admin/product/edit',[ProductController::class,  'edit'])->name('edit.pro');

