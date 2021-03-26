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
    return view('user');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/contact', function () {
    // return view('contact');
    return redirect('about');
});

Route::view('about', 'about');
// Route::view('contact', 'contact');

Route::get('/details/{name}', function ($name) {
    return view('details', ['name' => $name]);
});
