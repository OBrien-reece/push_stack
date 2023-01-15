<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PushStackController;

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
    return view('pushstack.index');
});

Auth::routes();

Route::get('/pushstack', [PushStackController::class, 'index'])->name('index');

Route::get('/otherstylespage', [PushStackController::class, 'otherstylespage'])->name('otherstylespage');

Route::get('/home', [App\Http\Controllers\PushStackController::class, 'index'])->name('home');
