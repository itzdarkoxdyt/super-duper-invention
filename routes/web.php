<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('eventoss',App\Http\Controllers\EventossController::class);
Route::resource('organizadoress',App\Http\Controllers\OrganizadoressController::class);
Route::resource('participacioness',App\Http\Controllers\ParticipacionessController::class);
