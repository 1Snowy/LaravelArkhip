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
        Schema::create('voting_result', function (Blueprint $table) {
            $table->id();
            $table->foreignId('station_id')->constrained('polling_station')->onDelete('cascade');
            $table->foreignId('candidate_id')->constrained('candidate')->onDelete('cascade');
            $table->foreignId('campaign_id')->constrained('election_campaign')->onDelete('cascade');
            $table->integer('vote_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voting_result');
    }
};
