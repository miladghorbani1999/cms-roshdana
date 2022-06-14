<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment as CommentEnum;
use App\Enums\Tag as TagEnum;
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

}
