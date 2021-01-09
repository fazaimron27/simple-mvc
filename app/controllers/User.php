<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Helper;
use App\Models\User as UserModel;

class User extends Controller
{
    public function index()
    {
        $users = UserModel::all();
        $this->view('user.index', ['users' => $users]);
    }

    public function create()
    {
        $this->view('user.create');
    }

    public function store()
    {
        UserModel::create([
            'username' => $_POST['username'],
            'email' => $_POST['email']
        ]);
        Helper::redirect('user');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $this->view('user.edit', ['user' => $user]);
    }

    public function update($id)
    {
        $user = UserModel::findOrFail($id);
        $user->update([
            'username' => $_POST['username'],
            'email' => $_POST['email']
        ]);
        Helper::redirect('user');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();
        Helper::redirect('user');
    }
}
