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
    switch (\Illuminate\Support\Facades\Auth::user()->roles) {
        case 'ADMIN':
            return redirect(route('admin'));
            break;
        case 'STAFF':
            return redirect(route('staff'));
            break;
        default:
            redirect(route('welcome'));
            break;
    }
});

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'admin'])
    ->name('admin');

Route::get('/staff', function () {
    return view('staff');
})->middleware(['auth', 'staff'])
    ->name('staff');

require __DIR__ . '/auth.php';
