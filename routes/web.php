<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Peminjaman2Controller;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::resource('peminjaman', PeminjamanController::class);
Route::resource('peminjaman2', peminjaman2Controller::class);

Route::get('admin', function () {
    return view('halo');
});

Route::get('user', function () {
    return view('layouts.user');
});

Route::get('multimedia', function () {
    return view('layouts.user.multimedia');
});

Route::get('diskusi', function () {
    return view('layouts.user.diskusi');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','isAdmin']], function () {
    Route::get('profile', function (){
        return view('proflie');
    });
});

Route::get('/errors', function (){
    returnview('403');
});