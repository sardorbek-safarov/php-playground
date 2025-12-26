<?php

namespace App\Models;

use App\Contracts\JsonResponse;

class User implements JsonResponse
{
    public function __construct(
        protected string $name,
        protected string $email
    ) {}

    public function toJson(): string
    {
        return json_encode(
            $this->getProfile(),
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
    }

    protected function getProfile(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
