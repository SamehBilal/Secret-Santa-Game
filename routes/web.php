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

Route::get('/', [\App\Http\Controllers\ProfileController::class,'index']);

Route::get('/1', function () {
    return view('welcome2');
});


Route::get('/wheel',[\App\Http\Controllers\WheelController::class,'index'])->middleware(['auth'])->name('wheel');

Route::get('/profile',[\App\Http\Controllers\ProfileController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/result/{id}',[\App\Http\Controllers\ProfileController::class,'result'])->middleware(['auth'])->name('result');

Route::post('/profile/{id}', [\App\Http\Controllers\ProfileController::class,'update'])->name('dashboard.profile');

Route::get('/wheel-result', [\App\Http\Controllers\WheelController::class,'wheel'])->name('wheel.result');

require __DIR__.'/auth.php';
