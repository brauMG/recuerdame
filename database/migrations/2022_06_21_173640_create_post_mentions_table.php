<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostMentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_mentions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_post');
            $table->foreignId('id_user');
            $table->string('comment');
            $table->string('reply_to')->nullable();
            $table->string('hide');
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
        Schema::dropIfExists('post_mentions');
    }
}
