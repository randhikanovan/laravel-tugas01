<?php

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
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/welcome/{nama_awal}', function ($nama) {
//     return view('welcome', ["nama_awal" => $nama["first_name"]]);
// });

// Route::post('/welcome/{request}', function ($request) {
//     return view('welcome', ["nama_awal" => $request["first_name"]]);
// });

Route::post('/welcome', 'RegisterCOntroller@welcome');