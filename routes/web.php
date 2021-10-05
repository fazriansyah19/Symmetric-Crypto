<?php

use App\Http\Controllers\DecryptController;
use App\Http\Controllers\EncryptController;
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
    return view('home');
});

Route::prefix('encrypt')->group(function() {
    Route::get('index', [EncryptController::class, 'index'])->name('encrypt.index');
    Route::get('create', [EncryptController::class, 'create'])->name('encrypt.create');
    Route::post('create', [EncryptController::class, 'store']);
    Route::delete('delete/{encrypt:id}', [EncryptController::class, 'destroy'])->name('encrypt.delete');

});

Route::prefix('decrypt')->group(function() {
    Route::get('index', [DecryptController::class, 'index'])->name('decrypt.index');
    Route::get('create', [DecryptController::class, 'create'])->name('decrypt.create');
    Route::post('create', [DecryptController::class, 'store']);
    Route::delete('delete/{decrypt:id}', [DecryptController::class, 'destroy'])->name('decrypt.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
