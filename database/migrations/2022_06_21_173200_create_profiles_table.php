<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type');
            $table->string('url_qr')->unique();
            $table->string('profile_image')->nullable();;
            $table->string('cover_image')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('gender')->nullable();
            $table->string('birth_country')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('birth_state')->nullable();
            $table->date('birth_date');
            $table->date('passing_date');
            $table->string('passing_location')->nullable();
            $table->string('languages')->nullable();
            $table->string('quotes')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('in_life')->nullable();
            $table->string('interest_facts')->nullable();
            $table->string('family_members')->nullable();
            $table->string('allow_mentions');
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
        Schema::dropIfExists('profiles');
    }
}
