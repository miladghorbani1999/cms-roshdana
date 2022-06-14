<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment as CommentEnum;
use App\Enums\User as UserEnum;
use App\Enums\Author as AuthorEnum;;
use App\Enums\Video as VideoEnum;
use App\Enums\Admin as AdminEnum;
class Video extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, CommentEnum::COMMENTABLE);
    }

    public function admin(){
        return $this->hasOneThrough(Admin::class, User::class, UserEnum::ID, AdminEnum::USER_ID, VideoEnum::USER_ID);
    }

    public function author(){
        return $this->hasOneThrough(Author::class, User::class, UserEnum::ID, AuthorEnum::USER_ID, AdminEnum::USER_ID);
    }

}
