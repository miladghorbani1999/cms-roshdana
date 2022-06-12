<?php

namespace App\Models;
use App\Enums\Admin as AdminEnum;
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
        AdminEnum::MOBILE,
        AdminEnum::ACTIVITY,
        AdminEnum::USER_ID,
    ];

}
