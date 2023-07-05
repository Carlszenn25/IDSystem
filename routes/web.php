<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->get('/', function () {
    return view('auth.login');
});

Route::post('/login', function () {
    return view('auth.login');
});

Route::get('/layout.app',function () {
    return view('layout.app');
});


Route::get('/dashboard', function() {
    return view('index');
});

Route::get('/card_template', function() {
    return view('admin.IDtemplate');
});

Route::get('/card_printing', function() {
    return view('admin.IDprinting');
});




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

