<?php

use App\Http\Controllers\EscolaController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HortaController;
use App\Models\Escola;
use App\Models\Foto;
use App\Models\Horta;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Sessão administrativa

Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('escolas', EscolaController::class)->except(['show']);
    Route::resource('hortas', HortaController::class);
    Route::resource('fotos', FotoController::class)->except(['show', 'edit', 'update']);

});
