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
// Route::view('/', 'layouts.app');

// Route::redirect('/', 'home.index');


// Route::get('home', function () {
//     return view('home.index'); // Рендерим шаблон home/index.blade.php
// })->name('home');

Route::view('/home','home.index')->name('home');

// Route::view('/', 'layouts.app');