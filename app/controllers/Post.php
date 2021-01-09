<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Helpers\Auth;
use App\Helpers\Redirect;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function __construct()
    {
        if (!Auth::check()) {
            Redirect::to('auth/login');
        }
    }

    public function index()
    {
        $posts = PostModel::all();
        $this->view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        $this->view('post.create');
    }

    public function store()
    {
        PostModel::create([
            'title' => $_POST['title'],
            'body' => $_POST['content']
        ]);
        Redirect::to('post');
    }

    public function edit($id)
    {
        $post = PostModel::findOrFail($id);
        $this->view('post.edit', ['post' => $post]);
    }

    public function update($id)
    {
        $user = PostModel::findOrFail($id);
        $user->update([
            'title' => $_POST['title'],
            'body' => $_POST['content']
        ]);
        Redirect::to('post');
    }

    public function destroy($id)
    {
        $user = PostModel::findOrFail($id);
        $user->delete();
        Redirect::to('post');
    }
}
