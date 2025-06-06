<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/',[HomeController::class, 'home']);

Route::get('/dashboard',[HomeController::class, 'login_home'])->
middleware(['auth', 'verified'])->name('dashboard');

Route::get('/my_orders', [HomeController::class, 'my_orders'])->
middleware(['auth'],['verified']);

Route::get('/why_us', [HomeController::class, 'why_us'])->
middleware(['auth'],['verified']);

Route::get('/testimony', [HomeController::class, 'testimony'])->
middleware(['auth'],['verified']);

/*FUNCTIONS*/

Route::get('product_details/{id}', [HomeController::class, 'product_details']);

Route::get('add_cart/{id}', [HomeController::class, 'add_cart'])->
middleware(['auth'],['verified']);

Route::get('mycart', [HomeController::class, 'mycart'])->
middleware(['auth'],['verified']);

Route::get('delete_cart/{id}', [HomeController::class, 'delete_cart'])->
middleware(['auth'],['verified']);

Route::post('confirm_order', [HomeController::class, 'confirm_order'])->
middleware(['auth'],['verified']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* ADMIN ROUTES */

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->
middleware(['auth'],['admin']);

Route::get('view_category', [AdminController::class, 'view_category'])->
middleware(['auth'],['admin']);


Route::post('add_category', [AdminController::class, 'add_category'])->
middleware(['auth'],['admin']);


Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->
middleware(['auth'],['admin']);

Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->
middleware(['auth'],['admin']);

Route::post('update_category/{id}', [AdminController::class, 'update_category'])->
middleware(['auth'],['admin']);

Route::get('add_product', [AdminController::class, 'add_product'])->
middleware(['auth'],['admin']);

Route::post('upload_product', [AdminController::class, 'upload_product'])->
middleware(['auth'],['admin']);

Route::get('view_product', [AdminController::class, 'view_product'])->
middleware(['auth'],['admin']);

Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->
middleware(['auth'],['admin']);

Route::get('update_product/{id}', [AdminController::class, 'update_product'])->
middleware(['auth'],['admin']);

Route::post('edit_product/{id}', [AdminController::class, 'edit_product'])->
middleware(['auth'],['admin']);

Route::get('product_search', [AdminController::class, 'product_search'])->
middleware(['auth'],['admin']);

Route::get('view_orders', [AdminController::class, 'view_orders'])->
middleware(['auth'],['admin']);

Route::get('on_delivery/{id}', [AdminController::class, 'on_delivery'])->
middleware(['auth'],['admin']);

Route::get('delivered/{id}', [AdminController::class, 'delivered'])->
middleware(['auth'],['admin']);
/* ADMIN ROUTES END*/
