<?php

namespace App\Controllers;

use App\Core\Flasher;
use App\Core\Controller;
use App\Core\Helper;
use App\Models\Post as PostModel;

class Post extends Controller
{
    public function __construct()
    {
        if (!Helper::auth()) {
            Helper::redirect('auth/login');
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
        // Flasher::setFlash('Post Succesfully Added', 'Congratulations!', 'success');
        Helper::redirect('post');
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
        Helper::redirect('post');
    }

    public function destroy($id)
    {
        $user = PostModel::findOrFail($id);
        $user->delete();
        Helper::redirect('post');
    }
}
