@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    List Users
                    <a href="{{ BASEURL }}/post/create" class="badge badge-primary">Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="table_user">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Body</th>
                                <th scope="col">Created at</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                <td align="center"><a href="{{ BASEURL }}/post/edit/{{ $post->id }}"
                                        class="badge badge-secondary">Edit</a></td>
                                <td align="center"><a onclick="return confirm('Are You Sure');"
                                        href="{{ BASEURL }}/post/destroy/{{ $post->id }}"
                                        class="badge badge-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection