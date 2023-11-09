<?php
Route::get('/',                 ['as'=>'adm.raiz',      'uses'=>'LoginController@login' ]);
Route::get('login',             ['as'=>'adm.login',     'uses'=>'LoginController@login' ]);

Route::post('/interfaz/mini',       'InterfazController@mini');

Route::post('sesion/abrir',     ['as' => 'adm.abrirSesion',     'uses' => 'SesionController@abrir' ]);
Route::get ('sesion/cerrar',    ['as' => 'adm.cerrarSesion',    'uses' => 'SesionController@cerrar' ]);

Route::group(['middleware' => ['sesion']], function() {

});