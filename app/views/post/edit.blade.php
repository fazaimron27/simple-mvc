@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
                    <form action="<?= BASEURL; ?>/post/update/{{ $post->id }}" method="POST">
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" id="content">{{ $post->body }}</textarea>
                        </div>
                        <a href="{{ BASEURL }}/post" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection