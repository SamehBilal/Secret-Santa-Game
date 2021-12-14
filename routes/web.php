<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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


Route::get('/wheel', function () {
    $users = User::all();
    return view('wheel',compact('users'));
});

Route::get('/dashboard', function () {
    $user = auth()->user();
    return view('profile',compact('user'));
})->middleware(['auth'])->name('dashboard');

Route::post('/profile/{id}', function (Request $request) {
    dd($request->all());
})->name('dashboard.profile');

Route::get('/result', function () {
    return view('result');
})->middleware(['auth'])->name('result');

require __DIR__.'/auth.php';
