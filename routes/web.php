<?php

use App\Http\Controllers\ProgramsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TrainersController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ClientsController;


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
Route::get('login2', function () {
    return view('/auth/login2');
});
Route::get('register2', function () {
    return view('/auth/register2');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('index', function() { return view('index'); })->middleware('auth');
Route::resource('programs',ProgramsController::class);
Route::resource('sessions',SessionsController::class);
Route::resource('trainers',TrainersController::class);


Route::group(['middleware' => 'auth'], function(){
    //Route::get('index', function() { return view('index'); })->name('client.index');
    //Route::get('Trainer/index', function() { return view('Trainer/index'); })->name('trainer.index');
    //Route::get('Trainer/Bookings', function() { return view('Trainer/Bookings'); })->name('trainer.Bookings');
    Route::get('Trainer/Equipment', function() { return view('Trainer/Equipment'); })->name('trainer.Equipment');
    Route::get('Trainer/Programs', function() { return view('Trainer/Programs'); })->name('trainer.Programs');
    //Route::get('Trainer/Profile', function() { return view('Trainer/Profile'); })->name('trainer.Profile');

    Route::get('book-session', function() { return view('book-session'); });
    Route::get('create-session', function() { return view('Trainer/create-session'); });

    //Route::get('profile', function() { return view('profile'); })->name('client.profile');
    Route::get('bookings', function() { return view('bookings'); })->name('client.bookings');
    //Route::get('programs', function() { return view('programs'); })->name('programs');

    Route::get('book-session', [ProgramsController::class,'index'])->name('booksession');
    Route::post('session', [SessionsController::class, 'store'])->name('create-session');
    Route::get('index', [SessionsController::class,'index'])->name('client.index');

    Route::get('Trainer/index', [TrainersController::class,'index'])->name('trainer.index');
    Route::get('Trainer/Bookings', [BookingsController::class,'index'])->name('trainer.Bookings');
    Route::post('Trainer/Bookings/{id}', [BookingsController::class,'approvebooking'])->name('approve-booking');
    Route::get('Trainer/Profile', [TrainersController::class,'profile'])->name('trainer.Profile');

    Route::get('profile', [ClientsController::class,'profile'])->name('client.profile');
    Route::get('sessions', [SessionsController::class, 'sessions'])->name(('client.sessions'));
    Route::get('bookings', [BookingsController::class, 'clientbookings'])->name('client.bookings');


});


