<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Enums\User as UserEnum;
use App\Enums\Image as ImageEnum;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        UserEnum::FirstName,
        UserEnum::LAST_NAME,
        UserEnum::EMAIL,
        UserEnum::PASSWORD,
        UserEnum::LAST_LOGIN,
        UserEnum::IMAGE
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        UserEnum::PASSWORD,
        UserEnum::REMEMBER_TOKEN,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        UserEnum::EMAIL_VERIFY => 'datetime',
    ];

    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function admin():HasOne
    {
        return $this->hasOne(Admin::class);
    }

    public function author():HasOne
    {
        return $this->hasOne(Author::class);
    }

    public function videos():HasManyThrough
    {
        return $this->hasManyThrough(Video::class, Author::class);
    }

    public function articles():HasManyThrough
    {
        return $this->hasManyThrough(Article::class, Author::class);
    }

    //=========     Accessors      =========//

    public function getFullNameAttribute():string{
        return $this->first_name . " " . $this->last_name;
    }
}
