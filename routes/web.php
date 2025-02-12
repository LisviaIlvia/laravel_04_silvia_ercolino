<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticoliController;
use App\Http\Controllers\ChiSiamoController;

// Rotta homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
// Rotta articoli
Route::get('/aggiungi-articolo', [PublicController::class, 'aggiungi'])->name('aggiungi.articolo');
Route::post('/salva-articolo', [ArticoliController::class, 'salva'])->name('salva.articolo');

Route::get('indice-articoli', [ArticoliController::class, 'articolo'])->name('articolo.indice');

Route::get('dettaglio-articoli/{id}', [ArticoliController::class, 'dettaglio'])->name('articolo.dettaglio');

Route::get('chi-siamo', [ChiSiamoController::class, 'chiSiamo'])->name('chiSiamo');
Route::get('dettaglio-chi-siamo/{id}', [ChiSiamoController::class, 'dettaglioChiSiamo'])->name('dettaglio.chiSiamo');

//Rotta per ottenere gli articoli in formato JSON
Route::get('/api/articoli', [ArticoliController::class, 'index'])->name('api.articoli');

Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');

Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');

