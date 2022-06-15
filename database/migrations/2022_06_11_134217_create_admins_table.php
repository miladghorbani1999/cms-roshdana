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
            $table->unsignedBigInteger(AdminEnum::USER_ID)->unique();
            $table->string(AdminEnum::NATIONAL_CODE,'10')->unique();
            $table->boolean(AdminEnum::IsActive);
            $table->timestamps();

            $table->foreign(AdminEnum::USER_ID)->references(UserEnum::ID)->on(UserEnum::TABLE);
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
