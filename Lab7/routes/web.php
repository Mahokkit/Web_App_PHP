<?php

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

Route::get('about', function (){
    return view('about');
});

Route::get('/tasks/{task}', function ($id) {
    dd($id);
    $tasks = DB::table('tasks')->latest()>get();
    return view('welcome', compact('tasks'));
});