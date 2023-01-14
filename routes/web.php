<?php

use App\Http\Controllers\AuthenticationController;
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
    return view('login');
});

Route::get('/login', function(){
  return view('login');
})->name('login');

Route::get('/cashout', function(){
  return view('cashout-form');
})->name('cashout');

Route::post('/cashout', [AuthenticationController::class, 'cashout'])->middleware(['balanceCheck', 'IsLogin'])->name('user.account.cashout');

Route::post('login-post', [AuthenticationController::class, 'userLogin'])->name('login.post');

Route::get('/balance', [AuthenticationController::class, 'balance'])->middleware('IsLogin');
Route::get('/register', function(){
  return view('register');
})->name('register');
