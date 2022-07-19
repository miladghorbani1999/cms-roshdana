<?php

namespace App\Models;


use App\Enums\Comment as CommentEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use \Znck\Eloquent\Traits\BelongsToThrough;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Znck\Eloquent\Relations\BelongsToThrough as BelongsToThroughRelation;

class Article extends Model
{

    use HasFactory,
        BelongsToThrough;

    //=========     Relations      =========//
    public function author(): BelongsTo{
        return $this->belongsTo(Author::class);
    }

    public function user(): BelongsToThroughRelation
    {
        return $this->BelongsToThrough(User::class,Author::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, CommentEnum::COMMENTABLE);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    //=========     Accessors      =========//
    public function getCreatedAtJalaliAttribute(): string {
        //$this->created_at_jalali
        return jdate($this->created_at)->format('j F Y');
    }

    public function getMainImageUrlAttribute():string
    {
        return '/storage/images/posts/'.$this->main_image;
    }



}
