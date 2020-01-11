<?php

Route::get('/','Backend\MasterMobilController@index');
Route::get('/master-users','Backend\UsersController@index');

Route::get('/master-mobil','Backend\MasterMobilController@index');
Route::get('/add-mobil','Backend\MasterMobilController@create');
Route::post('/master-mobil','Backend\MasterMobilController@store');
Route::get('/detail/{id}','Backend\MasterMobilController@show');
Route::post('/add-komentar','Backend\MasterMobilController@komentar');
Route::post('/list-komentar','Backend\MasterMobilController@list_komentar');
Route::post('/add-upvotes','Backend\MasterMobilController@upvotes');
Route::post('/add-downvotes','Backend\MasterMobilController@downvotes');


Route::get('/master-brand','Backend\MasterBrandController@index');
Route::post('/master-brand','Backend\MasterBrandController@store');
Route::post('/get-brand','Backend\MasterBrandController@update');
Route::post('/delete-brand','Backend\MasterBrandController@destroy');
