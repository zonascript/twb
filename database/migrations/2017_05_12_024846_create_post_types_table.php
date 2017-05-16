<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->integer('created_by');
            $table->string('created_by_name');
            $table->timestamps();
        });

        Schema::create('post_type_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_type_id')->unsigned();
            $table->string('locale');
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();

            $table->foreign('post_type_id')
                ->references('id')
                ->on('post_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_type_translations');
        Schema::dropIfExists('post_types');
    }
}
