<?php

use App\Models\User;
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
    return view('welcome');
});

Route::get('/1', function () {
    return view('welcome2');
});


Route::get('/3', function () {
    return view('welcome4');
});

Route::get('/wheel', function () {
    $users = User::all();
    return view('wheel',compact('users'));
});

Route::get('/dashboard', function () {
    return view('profile');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
