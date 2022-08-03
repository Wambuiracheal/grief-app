<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Route::get('profile', function () {
    return view('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('index', function() { return view('index'); })->middleware('auth');

Route::group(['middleware' => 'auth'], function(){
    Route::get('index', function() { return view('index'); })->name('client.index');
    Route::get('Trainer/index', function() { return view('Trainer/index'); })->name('trainer.index');
    Route::get('Trainer/Bookings', function() { return view('Trainer/Bookings'); })->name('trainer.Bookings');
    Route::get('Trainer/Equipment', function() { return view('Trainer/Equipment'); })->name('trainer.Equipment');
    Route::get('Trainer/Programs', function() { return view('Trainer/Programs'); })->name('trainer.Programs');
    Route::get('Trainer/Profile', function() { return view('Trainer/Profile'); })->name('trainer.Profile');

    Route::get('book-session', function() { return view('book-session'); });

});


