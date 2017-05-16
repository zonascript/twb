<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('post_type_id')->default('post');
            $table->string('status')->default('draft');
            $table->bigInteger('parent_id')->default(0);
            $table->integer('sort_order')->default(0);
            $table->dateTime('publish_at');
            $table->integer('created_by');
            $table->string('created_by_name');
            $table->timestamps();
        });

        Schema::create('post_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id')->unsigned();
            $table->string('locale');
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->text('content')->nullable();
            $table->string('page_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
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
        Schema::dropIfExists('post_translations');
        Schema::dropIfExists('posts');
    }
}
