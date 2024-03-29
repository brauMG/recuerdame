<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_post');
            $table->string('media_title')->nullable();
            $table->string('media_description')->nullable();
            $table->dateTime('media_date')->nullable();
            $table->string('media_location')->nullable();
            $table->string('filename')->nullable();
            $table->string('format')->nullable();
            $table->boolean('in_gallery')->nullable();
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
        Schema::dropIfExists('media');
    }
}
