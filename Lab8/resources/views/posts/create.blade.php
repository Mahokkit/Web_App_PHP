@extends('layouts.master')

    @section('content')
        <div class="col-sm-8 blog-main">
            <h1> Create a Post</h1>
            <hr>
            <form method="post" action="/posts">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>

                    <textarea id="body" name="body" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Publish</button>
            </form>
        </div>
    @endsection