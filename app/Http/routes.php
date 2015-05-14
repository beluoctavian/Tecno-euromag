<?php

Route::get('/','PagesController@index');
Route::get('/produse','PagesController@produse');
Route::get('/promotii','PagesController@promotii');
Route::get('contact',
    ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::post('/contact',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);
