<?php

use App\Enums\City as CityEnum;
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
            $table->unsignedInteger(AuthorEnum::CITY_ID);
            $table->enum(AuthorEnum::LEVEL, AuthorEnum::STATUSES)->default(AuthorEnum::JUNIOR);
            $table->timestamps();

            $table->foreign(AuthorEnum::USER_ID)->references(UserEnum::ID)->on(UserEnum::TABLE)->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(AuthorEnum::CITY_ID)->references(CityEnum::ID)->on(CityEnum::TABLE)->onUpdate('cascade')->onDelete('cascade');
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
