<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        switch (Auth::user()->roles) {
            case 'ADMIN':
                return redirect(route('admin'));
                break;
            case 'STAFF':
                return redirect(route('staff'));
                break;
            case 'STUDENT':
                return redirect(route('student'));
                break;
            default:
                return url('/login');
                break;
        }
    } else {
        redirect(route('login'));
    };
})
    ->middleware(['auth']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin');
    })
        ->middleware(['auth', 'admin'])
        ->name('admin');;
});

Route::prefix('staff')->group(function () {
    Route::get('/dashboard', function () {
        return view('staff');
    })
        ->middleware(['auth', 'staff'])
        ->name('staff');;
});

Route::prefix('student')->group(function () {
    Route::get('/dashboard', function () {
        return view('student');
    })
        ->middleware(['auth', 'student'])
        ->name('student');
});

require __DIR__ . '/auth.php';
