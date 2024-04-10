<?php

use App\Http\Controllers\ProgramsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CounsellorsController;
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('index', function() { return view('index'); })->middleware('auth');
Route::resource('programs',ProgramsController::class);
Route::resource('sessions',SessionsController::class);
Route::resource('counsellors',CounsellorsController::class);


Route::group(['middleware' => 'auth'], function(){
    //Route::get('index', function() { return view('index'); })->name('client.index');
    //Route::get('Counsellor/index', function() { return view('Counsellor/index'); })->name('counsellor.index');
    //Route::get('Counsellor/Bookings', function() { return view('Counsellor/Bookings'); })->name('counsellor.Bookings');
    //Route::get('Counsellor/Equipment', function() { return view('Counsellor/Equipment'); })->name('counsellor.Equipment');
    //Route::get('Counsellor/Programs', function() { return view('Counsellor/Programs'); })->name('counsellor.Programs');
    //Route::get('Counsellor/Profile', function() { return view('Counsellor/Profile'); })->name('counsellor.Procounsellor

    Route::get('book-session', function() { return view('book-session'); });
    Route::get('create-session', function() { return view('Counsellor/create-session'); });

    //Route::get('profile', function() { return view('profile'); })->name('client.profile');
    Route::get('bookings', function() { return view('bookings'); })->name('client.bookings');
    //Route::get('programs', function() { return view('programs'); })->name('programs');

    Route::get('book-session', [SessionsController::class,'booksession'])->name('booksession');
    Route::post('session', [SessionsController::class, 'store'])->name('create-session');
    Route::get('index', [SessionsController::class,'index'])->name('client.index');

    Route::get('Counsellor/index', [CounsellorsController::class,'index'])->name('counsellor.index');
    Route::get('Counsellor/Bookings', [BookingsController::class,'index'])->name('counsellor.Bookings');
    Route::post('Counsellor/Bookings/{id}', [BookingsController::class,'approvebooking'])->name('approve-booking');
    Route::get('Counsellor/Profile', [CounsellorsController::class,'profile'])->name('counsellor.Profile');

    Route::get('profile', [ClientsController::class,'profile'])->name('client.profile');
    Route::get('sessions', [SessionsController::class, 'sessions'])->name(('client.sessions'));
    Route::get('bookings', [BookingsController::class, 'clientbookings'])->name('client.bookings');
    Route::get('Counsellor/Programs', [ProgramsController::class, 'index'])->name('counsellor.Programs');
    Route::post('Counsellor/Programs', [ProgramsController::class, 'store'])->name('create.programs');
    Route::get('Counsellor/Sessions', [SessionsController::class, 'approvedsessions'])->name('counsellor.Sessions');
    Route::post('Counsellor/Sessions/{id}', [SessionsController::class, 'mark_attendance'])->name('mark.attendance');

    Route::get('Counsellor/Programs/{id}', [ProgramsController::class, 'show'])->name('show.program');
    Route::delete('Counsellor/Programs/{id}', [ProgramsController::class, 'destroy'])->name('delete.program');
    Route::get('Counsellor/client-records/{id}', [ClientsController::class, 'showrecords'])->name('client.records');

});


