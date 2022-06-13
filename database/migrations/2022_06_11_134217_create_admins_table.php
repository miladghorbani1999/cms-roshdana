<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\Admin as AdminEnum;
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
        Schema::create(AdminEnum::TABLE,function(Blueprint $table){
            $table->id();
            $table->string(AdminEnum::NATIONAL_CODE,'10')->unique();
            $table->boolean(AdminEnum::ACTIVITY);
            $table->timestamps();
            $table->unsignedBigInteger(AdminEnum::USER_ID)->unique();
            $table->foreign(AdminEnum::USER_ID)->on(UserEnum::TABLE)->references(UserEnum::ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(AdminEnum::TABLE);
    }
};
