<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TalleresController; // Agrega este use statement
use App\Http\Controllers\Talleres2Controller; // Agrega este use statement

Route::view('/', 'inicio')->name('inicio');
Route::view('programas','programas')->name('programas');

Route::view('asesoramientos','asesoramientos')->name('asesoramientos');
Route::view('contactos','contactos')->name('contactos');
Route::resource('talleres', talleres2Controller::class)->only('index','show');
