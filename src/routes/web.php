<?php

Route::get('/todo', 'TodoController@index');

Route::get('/todo/create', 'TodoController@create')->name('todo.create');

