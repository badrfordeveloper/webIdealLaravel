<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postes_tags', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->timestamps();

            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['post_id','tag_id']);
        Schema::dropIfExists('postes_tags');
    }
}
