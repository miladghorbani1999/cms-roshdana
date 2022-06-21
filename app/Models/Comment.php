<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Comment as CommentEnum;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        CommentEnum::BODY,
        CommentEnum::COMMENTABLE_ID,
        CommentEnum::COMMENTABLE_TYPE,
        CommentEnum::USER_ID,
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<int, string>
     */

    public function commentable()
    {
        return $this->morphTo( CommentEnum::COMMENTABLE);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
