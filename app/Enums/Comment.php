<?php

namespace App\Enums;


class Comment extends BaseEnum
{
    const TABLE            = 'comments';
    const BODY             = 'body';
    const COMMENTABLE_ID   = 'commentable_id';
    const COMMENTABLE_TYPE = 'commentable_type';
    const COMMENTABLE      = 'commentable';
    const USER_ID          = 'user_id';
    const NAME             = 'name';
}
