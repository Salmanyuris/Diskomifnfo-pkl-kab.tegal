<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

// Route::get('/announcment', function () {
//     return view('announcment', [
//         "title" => "Announcment"
//     ]);
// })->name('register.index');

// Route::get('/announcment', 'RegisterController@index')->name('announcment.index'); salah
Route::get('/announcment', [RegisterController::class, 'index'])->name('announcment.index');   // benar

Route::get('/registration', function () {
    return view('registration', [
        "title" => "Registration"
    ]);
});


// AUTH CONTROLLER

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

//  sebelumnya
// Route::get('/login', 'AuthController@login')->name('login');
// Route::get('/adminRegister', 'AuthController@register')->name('register');
// Route::post('/adminRegisterStore', 'AuthController@registerStore')->name('adminRegister.store');
// Route::post('/store', 'AuthController@loginStore')->name('loginStore');
// Route::post('/logout', 'AuthController@logout')->name('logout');

// pembetulan
Route::get('/login', [AuthController::class, 'login'])->name('login'); 
Route::get('/adminRegister', [AuthController::class, 'register'])->name('register'); 
Route::post('/adminRegisterStore', [AuthController::class, 'registerStore'])->name('adminRegister.store');
Route::post('/store', [AuthController::class, 'loginStore'])->name('loginStore');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ADMIN CONTROLLER
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    // Route::get('/penerimaan', function () {
    //     return view('admin/penerimaan');
    // })->name('penerimaan');
    Route::get('/penerimaan', [AdminController::class, 'index'])->name('penerimaan');

    Route::get('/homeadmin', function () {
        return view('admin/homeadmin');
    })->name('homeadmin');

    Route::get('admin/apply/{id}', [AdminController::class, 'apply'])->name('admin.apply');
    Route::get('admin/reject/{id}', [AdminController::class, 'reject'])->name('admin.reject');
    Route::get('/admin/cv/{id}', [AdminController::class, 'cv'])->name('admin.cv');
});

Route::post('/registerStore', [RegisterController::class, 'store'])->name('register.store');
