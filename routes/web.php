<?php

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $p1 = 'Dimasz';
//     return view('about',['p1' => $p1]);
// });

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/assets', 'AssetsController@index');