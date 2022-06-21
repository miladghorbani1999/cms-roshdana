<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment as CommentEnum;
use App\Enums\User    as UserEnum;
use App\Enums\Video   as VideoEnum;
use App\Enums\Admin   as AdminEnum;
use App\Enums\Image   as ImageEnum;
use App\Enums\Author  as AuthorEnum;
use App\Models\Author;


class Video extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        VideoEnum::TITLE,
        VideoEnum::DESCRIPTION,
        VideoEnum::AUTHOR_ID,
    ];
    public function comments()
    {
        return $this->morphMany(Comment::class, CommentEnum::COMMENTABLE);
    }

    public function admin(){
        return $this->hasOneThrough(Admin::class, User::class, UserEnum::ID, AdminEnum::USER_ID, VideoEnum::AUTHOR_ID);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function Image(){
        return $this->morphOne(Image::class, ImageEnum::IMAGEABLE);
    }

    public function user()
    {
        return $this->hasOneThrough(User::class,Author::class,AuthorEnum::USER_ID,UserEnum::ID,VideoEnum::AUTHOR_ID);
    }

}
