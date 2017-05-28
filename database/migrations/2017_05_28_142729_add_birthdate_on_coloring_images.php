<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBirthdateOnColoringImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coloring_images', function (Blueprint $table) {
            $table->date('user_birthdate')->after('user_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coloring_images', function (Blueprint $table) {
            $table->dropColumn('user_birthdate');
        });
    }
}
