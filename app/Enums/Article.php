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
    const IS_COMMENTABLE    = 'is_commentable';
    const SLUG        = 'slug';
    const AUTHOR_ID   = 'author_id';
    const CATEGORY_ID = 'category_id';
    const MAIN_IMAGE  = 'main_image';
}
