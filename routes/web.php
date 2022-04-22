<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilkanPengmasController;

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
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});
Route::get('/index', function () {
    return view('index', [
        "title" => "Homepage"
    ]);
});

Route::get('/pengmas', [TampilkanPengmasController::class, 'index']);
