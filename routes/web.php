<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InformationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('home.index'));
});

// Route::resource('/home', InformationController::class);
Route::get('/courses', [HomeController::class, 'courses'])->name('courses');
Route::get('/home', [InformationController::class, 'home'])->name('home.index');

Auth::routes();


// Route::middleware('auth')->group(function(){
Route::resource('/admin', InformationController::class);
// });