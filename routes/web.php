<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function(){
        return view('pages.welcome');
    })->name('app_home');

    Route::get('/apropos' , function(){
        return view('pages.apropos');
    })->name('app_about');

    Route::get('/accueil_auteurs',function(){
        return view('pages_auteurs.index');
    })->name('accueil_auteurs');
    Route::get('/livre_auteurs',function(){
        return view('pages_auteurs.livre');
    })->name('livre_auteurs');
    
