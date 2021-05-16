<?php
use Illuminate\Support\Facades\Route;
use JoaoCason\Ppg\Controllers\Categorias;
use JoaoCason\Ppg\Controllers\Cores;
use JoaoCason\Ppg\Controllers\Marcas;

Route::prefix('api')->group(function() {
    Route::get('categorias', [Categorias::class, 'index']);
    Route::get('marcas/{id_categoria}', [Marcas::class, 'index']);
    Route::get('cores', [Cores::class, 'index']);
});

