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
            $table->unsignedBigInteger(CommentEnum::USER_ID)->nullable();
            $table->string('name')->nullable();
            $table->string(CommentEnum::BODY);
            $table->morphs(CommentEnum::COMMENTABLE);
            $table->timestamps();

            $table->foreign(CommentEnum::USER_ID)->references(UserEnum::ID)->on(UserEnum::TABLE);
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
