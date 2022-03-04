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



Route::get('/', function () {
    return view('blog.index');
}) -> name('index');


Route::get('/generic', function () {
    return view('blog.generic');
}) -> name('generic');

Route::get('/generic2', function () {
    return view('blog.generic2');
}) -> name('generic2');

Route::get('/elements', function () {
    return view('blog.elements');
}) -> name('elements');