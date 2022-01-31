<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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


// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/', function () {
//         return redirect('login');
//     });
//     Route::get('/login', 'LoginController@index')->name('login');
//     Route::post('/login', 'LoginController@authenticate');
// });

// Route::group(['middleware' => 'auth'], function () {
//     Route::post('/logout', 'LoginController@logout');
//     Route::get('/dashboard', 'AdminController@index');
// });

Route::get('/', function () {
    if (Auth::check('auth'))
    {
        return redirect('dashboard');
    }
    else
    {
        return redirect('login');
    }
});
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});