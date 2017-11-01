<?php

Route::get('/', function () {

    $tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

Route::get('about', function (){
    return view('about');
});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->latest()->get();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {

    $task = DB::table('tasks')->find($id);

    return view('tasks/show', compact('task'));
});

