<?php

namespace App\Enums;

class User extends BaseEnum
{
    const TABLE           = 'users';
    const NAME            = 'name';
    const LAST_NAME       = 'last_name';
    const EMAIL           = 'email';
    const EMAIL_VERIFY    = 'email_verify';
    const PASSWORD        = 'password';
    const REMEMBER_TOKEN  = 'remember_token';
    const PASSWORD_RESTS  = 'password_resets';
    const TOKEN           = 'token';
    const MOBILE          = 'mobile';
    const LAST_LOGIN      = 'last_login';
}
