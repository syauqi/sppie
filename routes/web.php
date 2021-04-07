<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/auth', function () {
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
                return view('welcome');
                break;
        }
    } else {
        return view('welcome');
    };
})->middleware(['auth']);


Route::get('/', function () {
    return view('welcome');
})->name('index')
    ->middleware(['guest']);

Route::get('/tentang-kami', function () {
    return view('/tentang-kami');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('admin');
        Route::resource('data-siswa', 'App\Http\Controllers\Admin\StudentController');
        Route::resource('data-petugas', 'App\Http\Controllers\Admin\StaffController');
        Route::resource('data-kelas', 'App\Http\Controllers\Admin\ClassController');
        Route::resource('data-spp', 'App\Http\Controllers\Admin\SppController');
    });

Route::prefix('staff')
    ->middleware(['auth', 'staff'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Staff\DashboardController@index')
            ->name('staff');
        Route::resource('data-spp-siswa', 'App\Http\Controllers\Staff\SppController');
    });

Route::prefix('student')
    ->middleware(['auth', 'student'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Student\DashboardController@index')
            ->name('student');
        Route::resource('data-log-spp', 'App\Http\Controllers\Student\SppController');
    });

require __DIR__ . '/auth.php';
