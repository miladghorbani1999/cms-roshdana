<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment as CommentEnum;
use App\Enums\Tag as TagEnum;
use App\Enums\User as UserEnum;
use App\Enums\Admin as AdminEnum;
use App\Enums\Article as ArticleEnum;
use App\Enums\Author as AuthorEnum;
use App\Enums\Image as ImageEnum;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, CommentEnum::COMMENTABLE);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, TagEnum::TABLE_ARTICLE_TAG, TagEnum::TAG_ID, TagEnum::ARTICLE_ID);
    }

    public function admin(){
        return $this->hasOneThrough(Admin::class, User::class, UserEnum::ID, AdminEnum::USER_ID, ArticleEnum::USER_ID);
    }

    public function author(){
        return $this->hasOneThrough(Author::class, User::class, UserEnum::ID, AuthorEnum::USER_ID, AdminEnum::USER_ID);
    }

    public function Image(){
        return $this->morphOne(Image::class, ImageEnum::IMAGEABLE);
    }

}
