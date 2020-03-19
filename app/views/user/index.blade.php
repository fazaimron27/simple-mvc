@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    List Users
                    <a href="{{ BASEURL }}/user/create" class="badge badge-primary">Add</a>
                </div>
                <div class="card-body">
                    <table class="table table-hover" id="table_user">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created at</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                                <td align="center"><a href="{{ BASEURL }}/user/edit/{{ $user->id }}"
                                        class="badge badge-secondary">Edit</a></td>
                                <td align="center"><a onclick="return confirm('Are You Sure');"
                                        href="{{ BASEURL }}/user/destroy/{{ $user->id }}"
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