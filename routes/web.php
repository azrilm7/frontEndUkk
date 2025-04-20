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

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/cleared', function () {return view('pages.cleared');})->name('cleared');
Route::get('/add', function () {return view('pages.add');})->name('add');
Route::get('/edit', function () {return view('pages.edit');})->name('edit');
Route::get('/view', function () {return view('pages.view');})->name('view');    