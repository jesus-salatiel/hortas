<?php

use App\Http\Controllers\Admin\EscolaController;
use App\Http\Controllers\Admin\FotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HortaController;
use App\Models\Escola;
use App\Models\Foto;
use App\Models\Horta;

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

    $fotos  = Foto::all();
    $hortas = Horta::with(['fotos','escola'])->get();
    $escolas = Escola::all();


    return view('welcome', compact('fotos', 'hortas', 'escolas'));
})->name('welcome');

// Route::redirect('/', '/admin/escolas');

// Sessão administrativa

Route::prefix('admin')->name('admin.')->group(function(){

    Route::resource('escolas', EscolaController::class)->except(['show']);
    Route::resource('hortas', HortaController::class);
    Route::resource('hortas.fotos', FotoController::class)->except(['show', 'edit', 'update']);

});

// Site principal

   Route::resource('/escolas', App\Http\Controllers\Site\EscolaController::class)->only('index');
   Route::resource('escolas.hortas', App\Http\Controllers\Site\HortaController::class)->only(['index', 'show']);




// Route::get(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


