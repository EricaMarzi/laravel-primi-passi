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

Route::get('/', function () {
    $data = ['hello' => 'Hello World'];
    return view('home', $data);
})->name('home');

Route::get('/secondpage', function () {

    return view('/second-page.page');
})->name('page');
