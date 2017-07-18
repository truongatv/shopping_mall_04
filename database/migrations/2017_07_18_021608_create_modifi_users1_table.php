<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModifiUsers1Table extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fullname');
            $table->string('avatar_image_link')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->integer('role')->default(0);
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avata_image_link');
            $table->dropColumn('phone');
            $table->dropColumn('subcribe');
            $table->dropColumn('role');
            $table->dropColumn('password')->change();
        });
    }
}

