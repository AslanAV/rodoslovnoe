<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('first_name_id')->constrained('first_names');
            $table->foreignId('last_name_id')->constrained('last_names');
            $table->foreignId('maiden_name_id')->constrained('last_names');
            $table->string('patronymic');
            $table->timestamp('date_of_birth');
            $table->timestamp('date_of_death');
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('short_biography_id')->constrained('short_biographies');
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
        Schema::dropIfExists('people');
    }
};
