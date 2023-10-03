<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('home.index');
});

Route::resource('/home', 'HomeController');
Route::get('/courses', 'HomeController@courses')->name('courses');
Route::get('/admhome-cyberleague', 'AdminController@index')->name('admin.access');

Auth::routes();


// Route::middleware('auth')->group(function(){
    Route::resource('/admin', 'InformationController');
// });