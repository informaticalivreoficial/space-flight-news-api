<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');            
            $table->boolean('featured')->default(false);
            $table->string('title');
            $table->string('url');
            $table->string('imageUrl');
            $table->string('newsSite');
            $table->string('summary');
            $table->string('publishedAt');   
            
            $table->string('launches');
            $table->unsignedInteger('events');

            $table->foreign('launches')->references('id')->on('launches')->onDelete('CASCADE');
            $table->foreign('events')->references('id')->on('events')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
