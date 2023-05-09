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
    return view('welcome');
});
Route::get('/speciality', function () {
    return view('front.speciality');
});
Route::get('/sub_group', function () {
    return view('front.sub_group');
});
Route::get('/indications', function () {
    return view('front.indications');
});
Route::get('/sub_indications', function () {
    return view('front.sub_indications');
});
Route::get('/drug', function () {
    return view('front.drug');
});
Route::get('/drug_detail', function () {
    return view('front.drug_detail');
});
