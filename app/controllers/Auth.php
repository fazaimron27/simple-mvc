<?php

namespace App\Controllers;

use App\Core\Helper;
use App\Core\Controller;
use App\Models\User;

class Auth extends Controller
{
    public function login()
    {
        if (Helper::auth()) {
            Helper::redirect('');
        }
        $this->view('auth.login');
    }

    public function postLogin()
    {
        if (Helper::auth()) {
            Helper::redirect('');
        }

        $user = User::where(['username' => $_POST["username"]])->first();
        if ($user) {
            if (password_verify($_POST["password"], $user->password)) {
                $_SESSION["auth"] = true;
                $_SESSION["user_id"] = $user->id;
                Helper::redirect('');
            } else {
                Helper::redirect('auth/login');
            }
        } else {
            Helper::redirect('auth/login');
        }
    }

    public function logout()
    {
        session_destroy();
        Helper::redirect('auth/login');
    }
}
