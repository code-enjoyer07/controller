<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return "hello world"; // data yang di kirim type string
});

// route yang menggunakan function di RoutesController
Route::get('/dashboard', [RoutesController::class, 'Dashboard']);

// route redirect /buku ke /dashboard
Route::redirect('/buku', '/dashboard');

// get data json from dummy json
Route::get('/data-from-out', [RequestController::class, 'store']);

// return array data
Route::get('/array', function () {
    return [1, 'Perpustakaan', true];
});

// custom header response
Route::get('/hello', function () {
    return response($content = 'Hallo Laravel')
        ->withHeaders([
            'Content-Type' => 'text/html',
            'X-Header-One' => 'Header Value 1',
            'X-Header-Two' => 'Header Value 2',
        ]);
});

// redirect action from RoutesController
Route::get('/tes', function () {
    return redirect()->action([RoutesController::class, 'Dashboard']);
});

Route::get('/login', [AuthController::class, 'loginForm']);

Route::get('/books', [BookController::class, 'showForm']);
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/data', [BookController::class, 'index']);
