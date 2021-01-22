<?php

use Illuminate\Support\Facades\Route;

//SENZA controller:
Route::get('/helloAll', function () {
    return view('index-1', 
    [
        'hello' => 'Hello everyone!',
        'user' => 'Mattia'
    ]);
});

//CON controller:
Route::get("/holaTodos", "MainController@holaTodos1"); //scommentare il metodo per vederlo senza impact
Route::get("/holaTodos", "MainController@holaTodos2");









//CON controller:
Route::get('/helloESP', function () {
    return view('index-2');
});
