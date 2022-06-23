<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment as CommentEnum;
use App\Enums\Tag as TagEnum;
use App\Enums\User as UserEnum;
use App\Enums\Article as ArticleEnum;
use App\Enums\Author as AuthorEnum;
use App\Enums\Image as ImageEnum;
use \Znck\Eloquent\Traits\BelongsToThrough;

class Article extends Model
{

    use HasFactory,
        BelongsToThrough;

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function user()
    {
        return $this->BelongsToThrough(User::class,Author::class,AuthorEnum::USER_ID,UserEnum::ID,ArticleEnum::AUTHOR_ID);
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

}
