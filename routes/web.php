<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function(){
        return view('pages.welcome');
    });

    Route::get('/apropos' , function(){
        return view('pages.apropos');
    });
