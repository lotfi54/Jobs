<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('cname')->nullable($value = true);
            $table->string('slug')->nullable($value = true);
            $table->string('address')->nullable($value = true);
            $table->string('phone')->nullable($value = true);
            $table->string('website')->nullable($value = true);
            $table->string('logo')->nullable($value = true);
            $table->string('cover_photo')->nullable($value = true);
            $table->string('slogan')->nullable($value = true);
            $table->longText('description')->nullable($value = true);
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
        Schema::dropIfExists('companies');
    }
}
