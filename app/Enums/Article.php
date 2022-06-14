<?php
namespace App\Enums;

class Article extends BaseEnum
{
    const TABLE       = 'articles';
    const TITLE       = 'title';
    const DESCRIPTION = 'description';
    const DRAFT       = 'draft';
    const PUBLISHED   = 'published';
    const HIDE        = 'hide';
    const STATUS      = 'status';
    const STATUS_TYPE =[
        self::PUBLISHED,
        self::HIDE,
        self::DRAFT
    ];
    const RELEASE_AT = 'release_at';
    const COMMENT    = 'comment';
    const SLUG       = 'slug';
    const USER_ID    = 'user_id';
}
