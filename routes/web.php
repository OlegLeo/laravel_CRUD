<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/export/', [UsersController::class, 'export']);

Route::prefix('players')->group(function () {


// Auth Middleware
    Route::group(['middleware' => 'auth'], function () {
        Route::get('', 'PlayerController@index');
        Route::get('create', 'PlayerController@create');
        Route::post('', 'PlayerController@store');
        Route::get('{player}/edit', 'PlayerController@edit');
        Route::put('{player}', 'PlayerController@update');
        Route::delete('{player}', 'PlayerController@destroy');
    });
    Route::get('{player}', 'PlayerController@show');
});




Route::get('home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['admin']], function () {
Route::get('admin-view', [HomeController::class, 'adminView'])->name('admin.view');

});




