<?php
namespace App\Enums;

enum RolesEnum: string
{
    case ADMIN = 'admin';
    case USER = 'user';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Admin',
            self::USER => 'User',
        };
    }
}