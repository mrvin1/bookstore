<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ManageBookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\manageUserController;
use App\Http\Controllers\userDetailController;
use App\Http\Controllers\bookDetailController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\genreDetailController;
use App\Http\Middleware\Auth;



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

Route::get('/login', [LoginController::class, 'viewLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'viewRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/managebook', [ManageBookController::class, 'viewBook'])->middleware('adminmiddleware')->name('managebook');
Route::post('/managebook', [ManageBookController::class, 'insertBook'])->middleware('adminmiddleware')->name('managebook');
Route::post('/managebookDel', [ManageBookController::class, 'deleteBook'])->middleware('adminmiddleware')->name('managebookDel');
// home
Route::get('/', [HomeController::class, 'viewHome'])->name('home');
Route::post('/', [HomeController::class, 'searchBook'])->name('home');
Route::get('/home', [HomeController::class, 'viewHome'])->name('home');
Route::post('/home', [HomeController::class, 'searchBook'])->name('home');

Route::get('/profile', [ProfileController::class, 'profileView'])->middleware('adminmembermiddleware')->name('profile');
Route::post('/profile', [ProfileController::class, 'changeName'])->middleware('adminmembermiddleware')->name('profile');
Route::get('/changepassword', [PasswordController::class, 'passwordView'])->middleware('adminmembermiddleware')->name('changepassword');
Route::post('/changepassword', [PasswordController::class, 'changePassword'])->middleware('adminmembermiddleware')->name('changepassword');
Route::get('/manageuser', [manageUserController::class, 'viewUserController'])->middleware('adminmiddleware')->name('manageuser');
Route::post('/manageuser', [manageUserController::class, 'deleteUser'])->middleware('adminmiddleware')->name('manageuser');
Route::get('/userdetail', [userDetailController::class, 'userDetailView'])->middleware('adminmiddleware')->name('userdetail');
Route::post('/userdetail', [userDetailController::class, 'userEdit'])->middleware('adminmiddleware')->name('userdetail');
Route::get('/genre', [genreController::class, 'genreView'])->middleware('adminmiddleware')->name('genre');
Route::post('/genre', [genreController::class, 'genreInsert'])->middleware('adminmiddleware')->name('genre');
Route::post('/genreDel', [genreController::class, 'deleteGenre'])->middleware('adminmiddleware')->name('genreDel');
Route::get('/bookdetail/{idx}', [bookDetailController::class, 'bookDetailView'])->name('bookdetail');
Route::post('/bookdetail/{idx}', [bookDetailController::class, 'updateBook'])->middleware('adminmiddleware') ->name('bookdetail');//bookdetail update khusus admin
Route::post('/addcart/{idx}', [CartController::class, 'addCart'])->middleware('membermiddleware');
Route::get('/genredetail/{idx}', [genreDetailController::class, 'genreDetailView'])->middleware('adminmiddleware');
Route::post('/genredetail/{idx}', [genreDetailController::class, 'genreUpdate'])->middleware('adminmiddleware');

Route::get('/viewCart', function () {
    return view('viewCart');
});
Route::get('/editCart', function () {
    return view('editCart');
});
Route::get('/TransactionHistory', function () {
    return view('TransactionHistory');
});
Route::get('/TransactionHistDetail', function () {
    return view('TransactionHistDetail');
});

