<?php

namespace App\Core;

use Jenssegers\Blade\Blade;

class Controller
{
    public function view($view, $data = [])
    {
        $path = 'app/views';
        $blade = new Blade($path, 'storage/views');

        echo $blade->make($view, $data);
    }

    // public function model($model)
    // {
    //     require_once 'app/models/' . $model . '.php';
    //     $model = '\App\Models\\' . $model;
    //     return new $model;
    // }
}
