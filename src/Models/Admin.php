<?php

namespace App\Models;

class Admin extends User
{
    public function getRole(): string
    {
        return 'admin';
    }
}
