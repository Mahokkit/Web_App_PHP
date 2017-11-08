<?php

use App\Task;
//test

Route::get('/tasks', 'TasksController@index');


Route::get('/tasks/{task}', 'TasksController@show');

