<?php

namespace App\Core;

class Helper
{
    public static function redirect($location)
    {
        header('Location: ' . BASEURL  . $location);
        exit;
    }

    public static function auth()
    {
        if (isset($_SESSION["auth"])) {
            return true;
        } else {
            return false;
        }
    }

    public static function dd($data = [])
    {
        var_dump($data);
        die;
    }
}
