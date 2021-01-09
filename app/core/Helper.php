<?php

namespace App\Core;

class Helper
{
    public static function redirect($location)
    {
        header('Location: ' . BASEURL . '/' . $location);
        exit;
    }
}
