@extends('layouts.app')

@section('title', 'Add Users')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Add New User</div>
                <div class="card-body">
                    <form action="{{ BASEURL }}/user/store" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <a href="{{ BASEURL }}/user" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary float-right">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection