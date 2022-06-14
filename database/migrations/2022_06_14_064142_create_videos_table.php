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
            $table->string(Video::TITLE, 100);
            $table->string(Video::DESCRIPTION);
            $table->integer(Video::DURATION);
            $table->timestamp(Video::RELEASE_AT);
            $table->string(Video::UID, 100);
            $table->unsignedBigInteger(Video::USER_ID);
            $table->foreign(Video::USER_ID)->references('id')->on('users');
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
        Schema::dropIfExists('videos');
    }
};
