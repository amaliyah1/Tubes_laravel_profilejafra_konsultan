<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'SiswaController@index');
Route::post('/user', 'SiswaController@login');

Route::get('/output', 'SiswaController@output');
Route::post('/output', 'SiswaController@store');

Route::get('/mengganti/{id_login}', 'SiswaController@edit');
Route::post('/update/{id_login}', 'SiswaController@update');
Route::get('/delete/{id_login}',  'SiswaController@destroy');
// Route::post('/edit/{$id_login}', 'SiswaController@update');
// Route::get('/output', 'SiswaController@output');
Route::get('/output/{id_login}', 'SiswaController@destroy');
// Route::get('edit', function(){
//   \Auth::edit();
//
//   return \Redirect::to('/edit');
// });

Route::get('logout', function(){
  \Auth::logout();

  return \Redirect::to('/');
});
