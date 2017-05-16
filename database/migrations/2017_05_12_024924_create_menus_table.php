<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
        });

        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned();
            $table->integer('parent_id')->default(0);
            $table->string('link')->default('javascript:;');
            $table->string('permission');
            $table->string('icon_class')->nullable();
            $table->integer('order')->default(0);

            $table->foreign('menu_id')
                ->references('id')
                ->on('menus')
                ->onDelete('cascade');
        });

        Schema::create('menu_item_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_item_id')->unsigned();
            $table->string('locale');
            $table->string('title');
            $table->text('description')->nullable();

            $table->foreign('menu_item_id')
                ->references('id')
                ->on('menu_items')
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
        Schema::dropIfExists('menu_item_translations');
        Schema::dropIfExists('menu_items');
        Schema::dropIfExists('menus');
    }
}
