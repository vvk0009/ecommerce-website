<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
use App\Models\Addproduct;
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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/sproduct', function () {
    return view('sproduct');
});
Route::get('/sproduct2', function () {
    return view('sproduct2');
});
Route::get('/sproduct3', function () {
    return view('sproduct3');
});
Route::get('/sproduct4', function () {
    return view('sproduct4');
});
Route::get('/buy', function () {
    return view('buy');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
// Route::get('/addproduct', function () {
//     return view('addproduct');
// });

// Route::get('/show',function(){
//     return view('show');
// }
// );
Route::get("/addproduct",[product::class,'insert']);
Route::get("/shop",[product::class,'view']);
Route::get("/show",[product::class,'show']);

Route::post("/addproduct",[product::class,'login']);



Route::get("/show/delete{p_id}",[product::class],'delete')->name('show.delete');