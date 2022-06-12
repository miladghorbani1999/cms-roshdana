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
            $table->string(AdminEnum::NATIONAL_CODE,'9')->unique();
            $table->boolean(AdminEnum::ACTIVITY);
            $table->string(AdminEnum::MOBILE,'13');
            $table->timestamps();

            $table->foreign(AdminEnum::USER_ID)->on(AdminEnum::TABLE)->references(UserEnum::TABLE);
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
