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
    return view('index');
});
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

// Update user
Route::get('/users/update/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);

// Delete user
// Vẫn nhớ phải truyền id vào nhá
Route::get('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'delete']);

// Read user
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);

Route::get('/cart', function () {
    return view('template/cart');
});
Route::get('/checkout', function () {
    return view('template/checkout');
});
Route::get('/productdetail', function () {
    return view('template/productdetail');
});
Route::get('/register', function () {
    return view('template/register');
});
Route::get('/login', function () {
    return view('template/login');
});
Route::get('/forgotpassword', function () {
    return view('template/forgotpassword');
});
Route::get('/customer', function () {
    return view('admin/customer');
});Route::get('/product', function () {
    return view('admin/product');
});
Route::get('/login-2', function () {
    return view('admin/login');
});
//
Route::get('/add-to-cart', 'CartController@showAddToCart');
Route::get('/pay', 'CartController@showAddToCart');

