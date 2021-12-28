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

Route::get('/login', [LoginController::class, 'viewLogin']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'viewRegister']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/managebook', [ManageBookController::class, 'viewBook'])->middleware('adminmiddleware');
Route::post('/managebook', [ManageBookController::class, 'insertBook'])->middleware('adminmiddleware');
Route::post('/managebookDel', [ManageBookController::class, 'deleteBook'])->middleware('adminmiddleware');
Route::get('/home', [HomeController::class, 'viewHome']);
Route::post('/home', [HomeController::class, 'searchBook']);
Route::get('/profile', [ProfileController::class, 'profileView'])->middleware('adminmembermiddleware'); 
Route::post('/profile', [ProfileController::class, 'changeName'])->middleware('adminmembermiddleware');
Route::get('/changepassword', [PasswordController::class, 'passwordView'])->middleware('adminmembermiddleware');
Route::post('/changepassword', [PasswordController::class, 'changePassword'])->middleware('adminmembermiddleware');
Route::get('/manageuser', [manageUserController::class, 'viewUserController'])->middleware('adminmiddleware');
Route::post('/manageuser', [manageUserController::class, 'deleteUser'])->middleware('adminmiddleware');
Route::get('/userdetail', [userDetailController::class, 'userDetailView'])->middleware('adminmiddleware');
Route::post('/userdetail', [userDetailController::class, 'userEdit'])->middleware('adminmiddleware');
Route::get('/genre', [genreController::class, 'genreView'])->middleware('adminmiddleware');
Route::post('/genre', [genreController::class, 'genreInsert'])->middleware('adminmiddleware');
Route::post('/genreDel', [genreController::class, 'deleteGenre'])->middleware('adminmiddleware');
Route::get('/bookdetail/{idx}', [bookDetailController::class, 'bookDetailView']);
Route::post('/bookdetail/{idx}', [bookDetailController::class, 'updateBook'])->middleware('adminmiddleware'); //bookdetail update khusus admin
Route::post('/addcart/{idx}', [CartController::class, 'addCart'])->middleware('membermiddleware'); 


Route::get('/GenreDetail', function () {
    return view('genreDetail');
});
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

