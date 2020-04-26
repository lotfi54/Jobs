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
            $table->id();
                $table->string('user_id');
            $table->string('address')->nullable($value = true);
            $table->string('gender')->nullable($value = true);
            $table->string('firstname')->nullable($value = true);
            $table->string('lastname')->nullable($value = true);
            $table->string('dob')->nullable($value = true);
            $table->string('experience')->nullable($value = true);
            $table->string('bio')->nullable($value = true);
            $table->string('cover_letter')->default('');
            $table->string('resume')->default('');
            $table->string('avatar')->default('');
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
