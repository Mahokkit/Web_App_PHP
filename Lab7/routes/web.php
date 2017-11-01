<?php

Route::get('/', function () {
    $tasks = DB::table('tasks')->get();
    return view('welcome', compact('tasks'));
});

Route::get('about', function (){
    return view('about');
});