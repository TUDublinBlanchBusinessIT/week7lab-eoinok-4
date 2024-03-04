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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('members', App\Http\Controllers\memberController::class);
Route::get('/customers/new', 'App\Http\Controllers\CustomerController@new');
Route::post('/customers/create', 'App\Http\Controllers\CustomerController@create')->name('customers.create'); 

Route::resource('courts', App\Http\Controllers\courtController::class);


Route::resource('bookings', App\Http\Controllers\bookingController::class);

//Route::resource('products', App\Http\Controllers\productController::class);


Route::resource('scorders', App\Http\Controllers\scorderController::class);


Route::resource('orderdetails', App\Http\Controllers\orderdetailController::class);

Route::get('products/additem/{id}', 'App\Http\Controllers\productController@additem')->name('products.additem');

Route::get('allproducts/displaygrid', 'App\Http\Controllers\productController@displaygrid')->name('products.displaygrid');

Route::get('products/emptycart', 'App\Http\Controllers\productController@emptycart')->name('products.emptycart');