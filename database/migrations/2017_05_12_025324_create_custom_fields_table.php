<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('rules');
            $table->integer('order')->default(0);
        });

        Schema::create('custom_field_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('custom_field_id')->unsigned();
            $table->string('name');
            $table->string('label');
            $table->string('type');
            $table->integer('required')->default(0);
            $table->string('default_value')->nullable();
            $table->integer('allow_null')->default(1);
            $table->text('choices')->nullable();
            $table->integer('multiple')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custom_field_details');
        Schema::dropIfExists('custom_fields');
    }
}
