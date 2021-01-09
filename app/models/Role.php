<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    public $name;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
