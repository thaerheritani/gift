<?php

namespace App\Enum;

class PermissionEnum
{
    public const ADMIN = 'admin';
    public const USER = 'user';
    public const CREATOR = 'creator';

    public static function getAll(): array
    {
        return [
            self::ADMIN,
            self::USER,
            self::CREATOR,
        ];
    }

}