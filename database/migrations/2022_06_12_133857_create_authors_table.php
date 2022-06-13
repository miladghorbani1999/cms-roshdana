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
            $table->string(AuthorEnum::CITY);
            $table->enum(AuthorEnum::LEVEL,AuthorEnum::STATUSES)->default(AuthorEnum::JUNIOR);
            $table->unsignedBigInteger(AuthorEnum::USER_ID);
            $table->timestamps();
            $table->foreign(AuthorEnum::USER_ID)->on(UserEnum::TABLE)->references(UserEnum::ID)->unique();
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
