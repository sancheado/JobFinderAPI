<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/auth/linkedin', 'App\Http\Controllers\AuthController@redirectToLinkedIn')->name('linkedin.login');
Route::get('/auth/infojobs', 'App\Http\Controllers\AuthController@redirectToInfojobs')->name('infojobs.login');

Route::get('/callback/linkedin', 'App\Http\Controllers\AuthController@handleLinkedInCallback');
Route::get('/callback/infojobs', 'App\Http\Controllers\AuthController@handleInfojobsCallback');
