<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Author as AuthorEnum;
use App\Enums\User   as UserEnum;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(AuthorEnum::TABLE, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(AuthorEnum::USER_ID);
            $table->string(AuthorEnum::CITY);
            $table->enum('level', ['junior', 'mid-level', 'senior'])->default('junior');
            $table->timestamps();

            $table->foreign(AuthorEnum::USER_ID)->references(UserEnum::ID)->on(UserEnum::TABLE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(AuthorEnum::TABLE);
    }
};
