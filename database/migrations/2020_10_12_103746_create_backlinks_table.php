<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBacklinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlinks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('link')->nullable();
            $table->string('type');
            $table->string('etat');
            $table->string('genre')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('backlinks');
    }
}
