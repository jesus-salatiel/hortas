<?php

use App\Http\Controllers\Admin\EscolaController;
use App\Http\Controllers\Admin\FotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HortaController;
use App\Http\Controllers\GaleriaController;
use App\Models\Escola;
use App\Models\Foto;
use App\Models\Galeria;
use App\Models\Horta;
use Illuminate\Routing\Route as RoutingRoute;



// Page Inicial - PUBLIC

Route::redirect('/', '/galeria')->name('welcome');

Route::resource('/galeria', GaleriaController::class);

Route::get('/info', function(){
return view('info');
})->name('info');

// SESSÃO ADMINISTRATIVA

Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('escolas', EscolaController::class)->except(['show']);
    Route::resource('hortas', HortaController::class);
    Route::resource('hortas.fotos', FotoController::class)->except(['show', 'edit', 'update']);

});



