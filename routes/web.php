<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\recetteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recette', [recetteController::class ,'index'])->name('recette.index');

Route::get('/recette/create', [recetteController::class ,'create'])->name('recette.create');

Route::post('/recette', [recetteController::class ,'store'])->name('recette.store');

Route::get('/recette/{recette}/edit', [recetteController::class ,'edit'])->name('recette.edit');

Route::put('/recette/{recette}/update', [recetteController::class ,'update'])->name('recette.update');

Route::delete('/recette/{recette}/destroy', [recetteController::class ,'destroy'])->name('recette.destroy');

Route::get('/home', [recetteController::class ,'home'])->name('recette.home');

Route::get('/search' , [recetteController::class ,'search'])->name('recette.search');


Route::get('/recipe/{id}', [recetteController::class, 'show'])->name('recipe.show');
