<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Category as CategoryEnum;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        CategoryEnum::NAME,
        CategoryEnum::PARENT_ID
    ];

    public $timestamps = false;


    public function parent()
    {
        return $this->belongsTo(self::class, CategoryEnum::PARENT_ID);
    }

    public function children()
    {
        return $this->hasMany(self::class, CategoryEnum::PARENT_ID);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
