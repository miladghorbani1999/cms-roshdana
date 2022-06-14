<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Tag as TagEnum;
class ArticleTag extends Model
{
    use HasFactory;

    protected $table = TagEnum::TABLE_ARTICLE_TAG;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        TagEnum::ARTICLE_ID,
        TagEnum::TAG_ID,
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
