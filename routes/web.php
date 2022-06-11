<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function(){
        return view('pages.welcome');
    })->name('app_home');

    Route::get('/apropos' , function(){
        return view('pages.apropos');
    })->name('app_about');
