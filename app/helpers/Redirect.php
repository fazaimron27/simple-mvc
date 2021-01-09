<?php

namespace App\Helpers;

class Redirect
{
    public static function to($location)
    {
        header('Location: ' . BASEURL . '/' . $location);
        exit;
    }
}
