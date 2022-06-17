<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Category as CategoryEnum;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CategoryEnum::TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(CategoryEnum::PARENT_ID)->nullable();
            $table->string(CategoryEnum::NAME);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(CategoryEnum::TABLE);
    }
};
