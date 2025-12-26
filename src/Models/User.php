<?php

namespace App\Models;

class User
{
    public function __construct(
        protected string $name,
        protected string $email
    ) {}

    public function getProfile(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
