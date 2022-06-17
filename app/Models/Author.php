<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Author as AuthorEnum;
use App\Enums\User as UserEnum;
use App\Enums\video as videoEnum;
class Author extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        AuthorEnum::ID,
        AuthorEnum::CITY,
        AuthorEnum::LEVEL,
        AuthorEnum::USER_ID,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videos(){
        return $this->hasManyThrough(Video::class, User::class, UserEnum::ID, VideoEnum::USER_ID, AuthorEnum::USER_ID);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
