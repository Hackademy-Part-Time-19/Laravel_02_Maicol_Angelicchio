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
    $titolo = "IL BLOG DI MAICOL";
    return view('homepage', ['titolo'=>$titolo]);
})->name('home');
Route::get('/articoli', function () {
    $articoli = [
        ['titolo'=>'Telefono', 'descrizione'=>'È un telefono', 'categoria'=>'Elettronica'],
        ['titolo'=>'Divano', 'descrizione'=>'È un divano', 'categoria'=>'Mobili'],
        ['titolo'=>'Pentola', 'descrizione'=>'È una pentola', 'categoria'=>'Cucina'],
        ['titolo'=>'Tuta', 'descrizione'=>'È una tuta sportiva', 'categoria'=>'Sport']
    ];
    return view('articoli', ['articoli'=>$articoli]);
})->name('articoli');
Route::get('/chi-sono', function () {
    return view('contatti');
})->name('contatti');

Route::get('/articolo/{id}', function ($id) {
    $articoli = [
        ['titolo'=>'Telefono', 'descrizione'=>'È un telefono', 'categoria'=>'Elettronica'],
        ['titolo'=>'Divano', 'descrizione'=>'È un divano', 'categoria'=>'Mobili'],
        ['titolo'=>'Pentola', 'descrizione'=>'È una pentola', 'categoria'=>'Cucina'],
        ['titolo'=>'Tuta', 'descrizione'=>'È una tuta sportiva', 'categoria'=>'Sport']
    ];
    return view('articolo', ['articolo'=>$articoli[$id]]);
})->name('articolo');
