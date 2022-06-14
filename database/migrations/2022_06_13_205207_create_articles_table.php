<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Article as ArticleEnum;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string(ArticleEnum::TITLE,'150');
            $table->string(ArticleEnum::SLUG,'150')->unique();
            $table->string(ArticleEnum::DESCRIPTION);
            $table->enum(ArticleEnum::STATUS,ArticleEnum::STATUS_TYPE);
            $table->unsignedBigInteger(ArticleEnum::USER_ID)->unique();
            $table->timestamp(ArticleEnum::RELEASE_AT);
            $table->boolean(ArticleEnum::COMMENT)->default(true);
            $table->timestamps();
            $table->foreign(ArticleEnum::USER_ID)->references(ArticleEnum::ID)->on(UserEnum::TABLE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
