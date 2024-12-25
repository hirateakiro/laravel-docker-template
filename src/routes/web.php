<?php

Route::get('/todo', 'TodoController@index')->name('todo.index');

Route::get('/todo/create', 'TodoController@create')->name('todo.create');

Route::post('/todo', 'TodoController@store')->name('todo.store');