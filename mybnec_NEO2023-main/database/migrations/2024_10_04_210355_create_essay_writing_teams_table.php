<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('essay_writing_teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('registration_detail_id');
            $table->foreign('registration_detail_id')->references('id')->on('registration_details')->onDelete('cascade');
            $table->string('team_name')->nullable();
            $table->string('participant_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essay_writing_teams');
    }
};
