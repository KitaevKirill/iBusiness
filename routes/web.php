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

Route::get('/', 'HomeController@main');

Route::get('/quiz{quiz}/page{page}', 'QuizController@index')->where('page', '[0-9]+')->where('quiz', '[1-3]');
Route::post('/quiz{quiz}/page{page}', 'QuizController@post')->where('page', '[0-9]+')->where('quiz', '[1-3]');
Route::get('/quiz{quiz}/results', 'QuizController@results');
Route::get('/adminpanel', 'AdminController@index');
Route::get('/adminpanel/{id}', 'AdminController@view')->where('id', '[0-9]+');
Route::get('/adminpanel/clients', 'AdminController@clients');
Route::get('/adminpanel/clients/{id}', 'AdminController@access');
Route::post('/adminpanel/clients/{id}', 'AdminController@changeAccess');

Route::get('/adminpanel/quiz{quiz}/question', 'AdminQuestionController@index');
Route::get('/adminpanel/quiz{quiz}/question/create', 'AdminQuestionController@create');
Route::post('/adminpanel/quiz{quiz}/question/create', 'AdminQuestionController@store');
Route::patch('/adminpanel/quiz{quiz}/question{id}', 'AdminQuestionController@patch');
Route::delete('/adminpanel/quiz{quiz}/question{id}', 'AdminQuestionController@delete');

Route::get('/adminpanel/quiz/create', 'QuestionController@create');
Route::post('/adminpanel/quiz/create', 'QuestionController@store');
Route::delete('/adminpanel/quiz{id}/delete', 'QuestionController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/adminpanel/question', 'QuestionController');