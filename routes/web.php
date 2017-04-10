<?php

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

// Route::get('/', function () {

// 	$people = ['dern', 'dennis', 'lhem'];

//     return view('welcome', compact('people'));
//     //['people' => $people]
//     //->with('people', $people)
// });
// Route::get('about', function () {
// 	return view('pages.about');	
// });

// Route::get('/', 'PagesController@home');
// Route::get('about', 'PagesController@about');

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');
Route::get('notes/{note}/edit', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');

Route::get('/', 'PagesController@home');
