<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});


Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/contactez-nous', function () {
    return view('contactez-nous');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/nouveau-livre', function () {
    return view('nouveau-livre');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/nouveautes', function () {
    return view('nouveautes');
});

Route::get('/nouveautes', function () {
    return view('nouveautes');
});

Route::get('/recherche', function () {
    return view('recherche');
});

Route::get('/search', 'SearchController@index')->name('search');