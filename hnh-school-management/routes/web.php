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

Route::get('/', function () { return view('pages.index');});
Route::get('/pricing', function () { return view('pages.pricing');});
Route::get('/feature-request', function () { return view('pages.feature-request');});
Route::get('/support', function () { return view('pages.support');});
Route::get('/contact', function () { return view('pages.contact');});
