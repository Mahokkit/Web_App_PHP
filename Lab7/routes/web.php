<?php

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Finish my screencast',
        'Clean the house'
    ];
    return view('welcome', compact('tasks'));
});

Route::get('about', function (){
    return view('about');
});