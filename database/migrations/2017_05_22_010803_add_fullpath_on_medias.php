<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFullpathOnMedias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('medias', function (Blueprint $table) {
            $table->string('fullpath')->nullable()->after('path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medias', function (Blueprint $table) {
            $table->dropColumn('fullpath');
        });
    }
}
