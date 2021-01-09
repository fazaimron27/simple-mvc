<?php

namespace App\Controllers;

use App\Core\Helper;
use App\Core\Controller;

class Home extends Controller
{
    public function __construct()
    {
        if (!Helper::auth()) {
            Helper::redirect('auth/login');
        }
    }

    public function index()
    {
        $this->view('home.index');
    }
}
