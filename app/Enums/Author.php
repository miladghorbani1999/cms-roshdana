<?php

namespace App\Enums;

class Author extends BaseEnum
{
    const TABLE      = 'authors';
    const CITY       = 'city';
    const LEVEL      = 'level';
    const USER_ID    = 'user_id';
    const SENIOR     = 'senior';
    const MIDLEVEL   = 'mid_level';
    const JUNIOR     = 'junior';
    const STATUSES = [
        self::SENIOR,
        self::MIDLEVEL,
        self::JUNIOR
    ];

}
