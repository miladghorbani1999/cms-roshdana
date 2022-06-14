<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Image as ImageEnum;
class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        ImageEnum::URL,
        ImageEnum::IMAGEABLE_ID,
        ImageEnum::IMAGEABLE_TYPE,
    ];

    public function imageable(){
        return $this->morphTo();
    }
}
