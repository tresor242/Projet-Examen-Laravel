<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferencielController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\elila;
use App\Models\Formation;
use Illuminate\Support\Facades\Route;


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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*

Route::get('/ajout', function () {
    return view('ajout');
});
*/
Route::get('/tableau', function () {
    return view('dashboard');
});


Route::get('/', [TypeController::class, 'store']);
//Route::get('/', [elila::class, 'index']);
Route::get('/types/{id}', [TypeController::class, 'show'])->whereNumber('id');
Route::get('/referentiels/{id}', [ReferencielController::class, 'show'])->whereNumber('id');
Route::get('/formations/{id}', [FormationController::class,'show'])->whereNumber('id');;
Route::post('/ajoute', [EtudiantController::class,'store']);
Route::get('/dashboard', [FormationController::class, 'canByfor']);
Route::get('/Formation_Par_Referentiel',[ReferencielController::class, 'forByRef']);
Route::get('/candidats_par_sexe',[EtudiantController::class,'repartitionParSexe']);
Route::get('/Tranche_age', [EtudiantController::class, 'trancheAge']);