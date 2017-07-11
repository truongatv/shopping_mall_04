<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifiUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->increments('modifi_user_id');
            $table->string('fullname');
            $table->string('avatar_image_link');
            $table->string('phone');
            $table->string('subcribe')->nullable();
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
         Schema::table('modifi_users', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->dropColumn('avata_image_link');
            $table->dropColumn('phone'); 
            $table->dropColumn('subcribe');
        });
    }
}
