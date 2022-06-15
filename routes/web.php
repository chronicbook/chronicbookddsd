<?php

use App\Http\Controllers\auteurcontrolleur;
use App\Http\Controllers\histoircontrolleur;
use App\Http\Controllers\livrescontrolleur;
use App\Models\livre;
use Illuminate\Support\Facades\Route;

    Route::get('/', function(){
        return view('pages.welcome');
    })->name('app_home');

    Route::get('/accueil_auteurs',function(){
        return view('pages_auteurs.index');
    })->name('accueil_auteurs');

    Route::get('/livre_auteurs',function(){
        return view('pages_auteurs.livre');
    })->name('livre_auteurs');

    Route::get('/liste_livre',[livrescontrolleur::class,"listerlivrepourauteurs"])->name('liste_livre');

    Route::get('/liste_histoires_auteurs',[histoircontrolleur::class,"listehistoirepourlesauteurs"])->name('liste_histoires');

    Route::get('/histoire_auteurs',function(){
        return view('pages_auteurs.histoire');
    })->name('histoire_auteurs');

    Route::get('/accueil_admin',function(){
        return view('pages_admins.accueil');
    })->name('accueil_admin');

    Route::get('/ajout_auteur',[auteurcontrolleur::class,"ajoutauteur"])->name('ajout_auteur');

    Route::get('/lister_auteur',[auteurcontrolleur::class,"listeauteur"])->name('lister_auteurs');

    Route::get('/lister_livre_auteur',[livrescontrolleur::class,"listerlivre"])->name('lister_livre_auteurs');

    Route::get('/lister_histoires_auteurs',[histoircontrolleur::class,"listerhistoire"])->name('lister_histoires_auteurs');

    Route::get('/inscriptions' , function(){
        return view('pages.inscription');
    })->name('inscriptions');

    Route::get('/nos_auteurs', function(){
        return view('pages.nos_auteurs');
    })->name('nos_auteurs');

    Route::get('/connexion' , function(){
        return view('pages.connexion');
    })->name('connexion');