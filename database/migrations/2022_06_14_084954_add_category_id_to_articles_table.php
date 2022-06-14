<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        Schema::table(ArticleEnum::TABLE, function (Blueprint $table) {
            $table->unsignedBigInteger(ArticleEnum::CATEGORY_ID)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(ArticleEnum::TABLE, function (Blueprint $table) {
            $table->dropColumn(ArticleEnum::CATEGORY_ID);
        });
    }
};
