<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Video as VideoEnum;
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
        Schema::create(VideoEnum::TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(VideoEnum::USER_ID);
            $table->string(VideoEnum::TITLE, 100);
            $table->string(VideoEnum::DESCRIPTION);
            $table->unsignedInteger(VideoEnum::DURATION);
            $table->timestamp(VideoEnum::RELEASE_AT);
            $table->string(VideoEnum::UID, 100)->unique();
            $table->string(VideoEnum::MAIN_IMAGE)->nullable();
            $table->timestamps();

            $table->foreign(VideoEnum::USER_ID)
                ->references(UserEnum::ID)
                ->on(UserEnum::TABLE);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(VideoEnum::TABLE);
    }
};
