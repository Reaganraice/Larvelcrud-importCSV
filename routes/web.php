<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', function () {

    Mail::to('email@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/project', 'ProjectController');


Route::get('import',  'ProjectImportController@import');
Route::post('import', 'ProjectImportController@parseImport');
