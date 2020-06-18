<?php

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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/** les enseignants */
Route::get('/enseignants', 'EnseignantsController@index')->name('enseignants');
Route::get('/enseignant/add', 'EnseignantsController@create')->name('enseignantform');
Route::post('/enseignant/add/db', 'EnseignantsController@add')->name('enseignantcreate');
Route::get('/enseignant/{id}/delete', 'EnseignantsController@destroy')->name('enseignantdestroy');

/** les etudiants */
Route::get('/etudiants', 'EtudiantsController@index')->name('etudiants');
Route::get('/etudiant/add', 'EtudiantsController@create')->name('etudiantform');
Route::post('/etudiant/add/db', 'EtudiantsController@add')->name('etudiantcreate');
Route::get('/etudiant/{id}/delete', 'EtudiantsController@destroy')->name('etudiantdestroy');

/** les fillieres */
Route::get('/fillieres', 'FillieresController@index')->name('fillieres');
Route::get('/filliere/add', 'FillieresController@create')->name('filliereform');
Route::post('/filliere/add/db', 'FillieresController@add')->name('fillierecreate');
Route::get('/filliere/{id}/delete', 'FillieresController@destroy')->name('fillieredestroy');

/** les matieres */
Route::get('/matieres', 'MatieresController@index')->name('matieres');
Route::get('/matiere/add', 'MatieresController@create')->name('matiereform');
Route::post('/matiere/add/db', 'MatieresController@add')->name('matierecreate');
Route::get('/matiere/{id}/delete', 'MatieresController@destroy')->name('matieredestroy');