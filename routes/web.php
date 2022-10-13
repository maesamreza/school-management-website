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

Route::view('/', 'pages.index');
Route::view('/pricing', 'pages.pricing');
Route::view('/feature-request', 'pages.feature-request');
Route::view('/support', 'pages.support');
Route::view('/contact', 'pages.contact');
Route::view('/reseller', 'pages.reseller');
Route::view('/comparison', 'pages.comparison');
Route::view('/faq', 'pages.faq');
Route::view('/terms-of-use', 'pages.terms-of-use');
Route::view('/privacy-policy', 'pages.privacy-policy');
Route::view('/refund-policy', 'pages.refund-policy');
Route::view('/aboutus', 'pages.aboutus');
