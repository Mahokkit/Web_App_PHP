<?php

Route::get('/', 'PostsController@index');
//Route::get('/posts/{post}', 'PostsController@show');
Route::get('/posts/create', 'PostsController@create');
// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table