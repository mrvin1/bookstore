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

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/layoutmember', function () {
    return view('member-layout');
});
Route::get('/layoutadmin', function () {
    return view('admin-layout');
});

Route::get('/managebook', function () {
    return view('manageBook');
});
