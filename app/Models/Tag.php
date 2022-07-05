<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Enums\Tag as TageEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Tag extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        TageEnum::NAME,
    ];

    /**
     * Get the articles for the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, TageEnum::TABLE_ARTICLE_TAG, TageEnum::TAG_ID, TageEnum::ARTICLE_ID);

    }

}
