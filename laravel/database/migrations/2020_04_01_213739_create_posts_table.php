<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('userId')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('commmunityId')
                ->references('id')
                ->on('communities')
                ->onDelete('cascade');
            $table->string('imageUrl');
            $table->string('description');
            $table->string('tag');
            $table->integer('likes');
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
        Schema::dropIfExists('posts');
    }
}
