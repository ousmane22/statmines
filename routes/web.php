<?php

use App\Http\Livewire\ListeEntreprise;

use App\Http\Controllers\AppController;
use App\Http\Livewire\Listeminier;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('home');
});


Route::controller(AppController::class)->group(function(){
    Route::get('/entreprise','entreprise');
});

Route::get('/entrepriseShow/{entreprise}',ListeEntreprise::class)->name('entreprise.show');
Route::get('/listeminier/{titreminier}', Listeminier::class)->name('minier.show');


