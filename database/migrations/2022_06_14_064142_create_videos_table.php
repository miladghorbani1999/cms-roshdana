<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Video;
use App\Enums\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(Video::USER_ID);
            $table->string(Video::TITLE, 100);
            $table->string(Video::DESCRIPTION);
            $table->unsignedInteger(Video::DURATION);
            $table->timestamp(Video::RELEASE_AT);
            $table->string(Video::UID, 100)->unique();
            $table->string('main_image')->nullable();
            $table->timestamps();

            $table->foreign(Video::USER_ID)
                ->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
