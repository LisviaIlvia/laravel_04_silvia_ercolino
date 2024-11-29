<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticoliController;
use App\Http\Controllers\ChiSiamoController;

// Rotta homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
// Rotta articoli
Route::get('indice-articoli', [ArticoliController::class, 'articolo'])->name('articolo.indice');

Route::get('dettaglio-articoli/{id}', [ArticoliController::class, 'dettaglio'])->name('articolo.dettaglio');

Route::get('chi-siamo', [ChiSiamoController::class, 'chiSiamo'])->name('chiSiamo');
Route::get('dettaglio-chi-siamo/{id}', [ChiSiamoController::class, 'dettaglioChiSiamo'])->name('dettaglio.chiSiamo');

Route::get('/api/articoli', [ArticoliController::class, 'index']);

