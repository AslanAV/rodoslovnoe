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
        Schema::create('relationship_family_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person1_id')->constrained('people');
            $table->foreignId('person2_id')->constrained('people');
            $table->foreignId('person1_family_member_title')->constrained('family_members_titles');
            $table->foreignId('person2_family_member_title')->constrained('family_members_titles');
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
        Schema::dropIfExists('relationship_family_members');
    }
};
