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
        Schema::table(UserEnum::TABLE, function (Blueprint $table) {
            $table->timestamp(UserEnum::LAST_LOGIN)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(UserEnum::TABLE, function (Blueprint $table) {
            $table->dropColumn(UserEnum::LAST_LOGIN);
        });
    }
};
