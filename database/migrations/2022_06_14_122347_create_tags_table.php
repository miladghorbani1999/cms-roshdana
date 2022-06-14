<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Tag as TageEnum;
use App\Enums\Article as ArticleEnum;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create( TageEnum::TABLE_TAG , function (Blueprint $table) {
            $table->id();
            $table->string(TageEnum::NAME);
            $table->timestamps();
        });
        Schema::create(TageEnum::TABLE_ARTICLE_TAG, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(TageEnum::ARTICLE_ID);
            $table->unsignedBigInteger(TageEnum::TAG_ID);

            $table->unique([TageEnum::ARTICLE_ID, TageEnum::TAG_ID]);
            $table->foreign(TageEnum::ARTICLE_ID)->references(ArticleEnum::ID)->on(ArticleEnum::TABLE);
            $table->foreign(TageEnum::TAG_ID)->references(TageEnum::ID)->on(TageEnum::TABLE_TAG);
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
        Schema::dropIfExists(TageEnum::TABLE_ARTICLE_TAG);
        Schema::dropIfExists(TageEnum::TABLE_TAG);
    }
};
