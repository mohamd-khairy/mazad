<?php

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

Auth::routes();

Route::redirect('/', 'home');

Route::group(['middleware' => ['auth', 'isAdmin'], 'as' => 'admin.'], function () {
    Route::get('home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('address', \App\Http\Controllers\Admin\AddressController::class);
    Route::resource('mazad', \App\Http\Controllers\Admin\MazadController::class);
    Route::resource('category', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('comment', \App\Http\Controllers\Admin\CommentController::class);
    Route::resource('ask', \App\Http\Controllers\Admin\AskController::class);
    Route::resource('answer', \App\Http\Controllers\Admin\AnswerController::class);
});
