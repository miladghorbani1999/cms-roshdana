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

    public $timestamps = false;

    /**
     * Get the articles for the tag.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Article::class);

    }

}
