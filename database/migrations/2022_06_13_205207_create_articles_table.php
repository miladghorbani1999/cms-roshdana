<?php

use App\Enums\Category as CategoryEnum;
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
            $table->unsignedBigInteger(ArticleEnum::USER_ID)->nullable();
            $table->unsignedBigInteger(ArticleEnum::CATEGORY_ID)->nullable();
            $table->string(ArticleEnum::TITLE,'150');
            $table->string(ArticleEnum::SLUG,'150')->unique();
            $table->longText(ArticleEnum::DESCRIPTION);
            $table->string(ArticleEnum::MAIN_IMAGE)->nullable();
            $table->enum(ArticleEnum::STATUS,ArticleEnum::STATUS_TYPE);
            $table->timestamp(ArticleEnum::RELEASE_AT);
            $table->boolean(ArticleEnum::IS_COMMENTABLE)->default(true);
            $table->timestamps();

            $table->foreign(ArticleEnum::USER_ID)->references(UserEnum::ID)->on(UserEnum::TABLE)
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign(ArticleEnum::CATEGORY_ID)->references(UserEnum::ID)->on(CategoryEnum::TABLE)
                ->onUpdate('cascade')
                ->onDelete('set null');
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
