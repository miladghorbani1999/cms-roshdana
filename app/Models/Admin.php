<?php

namespace App\Models;
use App\Enums\Admin as AdminEnum;
use App\Enums\User as UserEnum;
use App\Enums\video as videoEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        AdminEnum::ID,
        AdminEnum::NATIONAL_CODE,
        AdminEnum::IsActive,
        AdminEnum::USER_ID,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videos(){
        return $this->hasManyThrough(Video::class, User::class, UserEnum::ID, VideoEnum::AUTHOR_ID, AdminEnum::USER_ID);
    }

}
