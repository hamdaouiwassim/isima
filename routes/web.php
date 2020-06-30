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

/** les avies */
Route::get('/avies', 'AviesController@index')->name('avies');
Route::get('/avies/{type}', 'AviesController@aviesType')->name('aviesType');
Route::get('/avies/examan/add', 'AviesController@avieexaman')->name('avieformexaman');
Route::get('/enseignants/avies', 'AviesController@aviesenseignants')->name('aviesenseignants');
Route::get('/avie/add', 'AviesController@create')->name('avieform');
Route::get('/avie/edit/{id}', 'AviesController@edit')->name('avieEdit');
Route::post('/avie/update', 'AviesController@update')->name('avieUpdate');
Route::post('/avie/add/db', 'AviesController@add')->name('aviecreate');
Route::get('/avie/{id}/delete', 'AviesController@destroy')->name('aviedestroy');

/** les messages */
Route::get('/messages', 'MessagesController@index')->name('messages');
Route::get('/message/add', 'MessagesController@create')->name('messageform');
Route::post('/message/add/db', 'MessagesController@add')->name('messagecreate');
Route::get('/message/{id}/delete', 'MessagesController@destroy')->name('messagedestroy');

Route::get('/discussion/{id}', 'MessagesController@discussion')->name('discussionform');

/** les supports */
Route::get('/supports', 'SupportsController@index')->name('supports');
Route::get('/support/add', 'SupportsController@create')->name('supportform');
Route::post('/support/add/db', 'SupportsController@add')->name('supportcreate');
Route::get('/support/{id}/delete', 'SupportsController@destroy')->name('supportdestroy');
Route::get('/support/{id}/modify', 'SupportsController@modify')->name('supportmodify');
Route::post('/support/{id}/modify/db', 'SupportsController@supportmodifydb')->name('supportmodifydb');

Route::get('/profile', 'HomeController@profile')->name('profile');
Route::post('/profile/update','HomeController@Update')->name('UpdateProfile');


/** Les stages */
Route::get('/stagepfe', 'StagesController@create')->name('stageCreate');
Route::post('/stagepfe/add/db', 'StagesController@store')->name('stageStore');

Route::get('/stages/all', 'StagesController@index')->name('stages');
Route::get('/stage/{id}/aime', 'StagesController@Notif')->name('stageNotif');
Route::get('/stage/{id}/valide', 'StagesController@valide')->name('stagevalide');
Route::get('/stage/{id}/refue', 'StagesController@refue')->name('stagerefue');




