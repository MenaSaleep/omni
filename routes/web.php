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
    return view('index');
});

Route::get('/profile', function () {
    return view('dashbord.profile.profile');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/edit.profile/{id}', [App\Http\Controllers\ProfileController::class, 'edit_profile'])->name('edit.profile');
Route::post('/update-profile', [App\Http\Controllers\ProfileController::class, 'update_user_profile'])->name("update.profile");

Route::get('/', [App\Http\Controllers\IndexController::class, 'index_page'])->name('index');
Route::get('/edit.indexpage/{id}', [App\Http\Controllers\IndexController::class, 'edit_index_page'])->name('edit.index');
Route::post('/update-index', [App\Http\Controllers\IndexController::class, 'update_index_page'])->name("update.index");


Route::get('/mail', [App\Http\Controllers\MailController::class, 'sendUserMail'])->name("send.email");
