<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\mahasiswa631Controller;
use App\Http\Controllers\mahasiswa634Controller;
use App\Http\Controllers\mahasiswa638Controller;
use App\Http\Controllers\mahasiswa624Controller;


Route::get('/', [profileController::class, 'Home']);
Route::get('/form631', [mahasiswa631Controller::class, 'showForm']);
Route::post('/form631', [mahasiswa631Controller::class, 'submitForm']);
Route::get('/form634', [mahasiswa634Controller::class, 'showForm']);
Route::post('/form634', [mahasiswa634Controller::class, 'submitForm']);
Route::get('/form638', [mahasiswa638Controller::class, 'showForm']);
Route::post('/form638', [mahasiswa638Controller::class, 'submitForm']);
Route::get('/form624', [mahasiswa624Controller::class, 'showForm']);
Route::post('/form624', [mahasiswa624Controller::class, 'submitForm']);
