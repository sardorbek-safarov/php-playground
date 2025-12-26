<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function show(): string
    {
        $user = new User('Sardor', 'sardor@gmail.com');
        return $user->toJson();
    }
}
