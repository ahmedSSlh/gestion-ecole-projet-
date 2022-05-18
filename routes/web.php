<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Jamal/othmane/ahmed
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/create-etudiant', [EtudiantController::class, 'create'])->name('etudiant.create.form')->middleware('auth')->middleware('isadmin');
Route::get('/list-etudiant', [EtudiantController::class, 'index'])->name('etudiant.index.form')->middleware('auth')->middleware('isadmin');
Route::post('/store-etudiant', [EtudiantController::class, 'store'])->name('etudiant.store.form')->middleware('auth')->middleware('isadmin');
Route::get('/etudiant-seance-list', [EtudiantController::class, 'seanceList'])->name('etudiant.seance.list')->middleware('auth')->middleware('isetudiant');

Route::get('/create-professeur', [ProfesseurController::class, 'create'])->name('professeur.create.form')->middleware('auth')->middleware('isadmin');
Route::post('/store-professeur', [ProfesseurController::class, 'store'])->name('professeur.store.form')->middleware('auth')->middleware('isadmin');
Route::get('/list-professeur', [ProfesseurController::class, 'index'])->name('professeur.index.form')->middleware('auth')->middleware('isadmin');
Route::get('/create-ajouter-note', [ProfesseurController::class, 'ajouterNote'])->name('create.ajouter.note')->middleware('auth')->middleware('isprofesseur');
Route::post('/ajouter-note', [ProfesseurController::class, 'ajouterNote'])->name('ajouter.note')->middleware('auth')->middleware('isprofesseur');

Route::get('/create-seance', [SeanceController::class, 'create'])->name('seance.create.form')->middleware('auth')->middleware('isadmin');
Route::post('/store-seance', [SeanceController::class, 'store'])->name('seance.store.form')->middleware('auth')->middleware('isadmin');
Route::get('/index-seance', [SeanceController::class, 'index'])->name('seance.index.form')->middleware('auth')->middleware('isadmin');
Route::get('/create-add-etudiants-seance/{seance}', [SeanceController::class, 'createAddEtudiantSeance'])->name('create.add.etudiants.seance')->middleware('auth')->middleware('isadmin');
Route::post('/add-etudiants-seance', [SeanceController::class, 'addEtudiantSeance'])->name('add.etudiants.seance')->middleware('auth')->middleware('isadmin');

/*** Delete******/
Route::delete('/click_delete/{user}',[UserController::class, 'destroy'])->name('user.delete');
/***recherche****/ 
Route::get('/search', [UserController::class, 'search'])->name('user.search');