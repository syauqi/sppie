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

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('admin');

        Route::resource('data-siswa', 'App\Http\Controllers\Admin\StudentController');
        Route::resource('data-petugas', 'App\Http\Controllers\Admin\StaffController');
        Route::resource('data-kelas', 'App\Http\Controllers\Admin\ClassController');
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
