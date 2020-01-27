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
            $table->string('judul');
            $table->bigInteger('category_id')->unsigned()->index();
            $table->text('content');
            $table->string('gambar');
            $table->string('slug');
            $table->bigInteger('users_id');
            $table->timestamps();
        });

        Schema::table('posts', function($table) {
            $table->foreign('category_id')
                  ->references('id')->on('category')
                  ->onDelete('restrict')->onUpdate('restrict');
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
