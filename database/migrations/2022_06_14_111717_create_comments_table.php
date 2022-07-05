<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Comment as CommentEnum;
use App\Enums\User as UserEnum;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CommentEnum::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(CommentEnum::BODY);
            $table->morphs(CommentEnum::COMMENTABLE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(CommentEnum::TABLE);
    }
};
