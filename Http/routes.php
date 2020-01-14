<?php

Route::group(['middleware' => 'web', 'prefix' => 'curso', 'namespace' => 'Sys\Curso\Http\Controllers'], function()
{
    Route::get('/', 'CursosController@index');
});
