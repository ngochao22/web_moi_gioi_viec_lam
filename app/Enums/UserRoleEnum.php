<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

final class UserRoleEnum extends Enum
{
    public const ADMIN = 0;
    public const APPLICANT = 1;
    public const HR = 2;

    public static function getValues(): array
    {
        return [
            self::ADMIN,
            self::APPLICANT,
            self::HR,
        ];
    }
}
