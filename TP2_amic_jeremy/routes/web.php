<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaitController;

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

/*****************
 * faits accueil
 */
Route::get('/', [FaitController::class, 'index'])
    ->name('faits.index');

/*****************
 * faits list
 */
Route::get('/list', [FaitController::class, 'list'])
    ->name('faits.list');

// Affichage du formulaire d'ajout d'une note
Route::get('/create', [FaitController::class, 'create'])
    ->name('faits.create');

// Modification 
Route::get('/{fait}/edit', [FaitController::class, 'edit'])
    ->name('faits.edit');

// Gère l'ajout d'un fait dans la base de données
Route::post('/store', [FaitController::class, 'store'])
->name('faits.store');

// Gère la suppression d'un fait de la base de données
Route::delete('/faits/{id}', [FaitController::class, 'destroy'])
->name('faits.destroy');
