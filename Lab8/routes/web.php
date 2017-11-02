<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table