<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        Schema::create(UserEnum::TABLE, function (Blueprint $table) {
            $table->id();
            $table->string(UserEnum::FirstName);
            $table->string(UserEnum::LAST_NAME);
            $table->string(UserEnum::MOBILE,'13')->nullable();
            $table->string(UserEnum::IMAGE)->nullable();
            $table->string(UserEnum::EMAIL)->unique();
//            $table->timestamp(UserEnum::EMAIL_VERIFY)->nullable();
            $table->string(UserEnum::PASSWORD);
            $table->rememberToken();
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
        Schema::dropIfExists(UserEnum::TABLE);
    }
};
