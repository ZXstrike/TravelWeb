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
        Schema::create('user_travel_options', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_travel_id')->constrained(table: 'user_travel', indexName: 'user_travel_options_user_travel_id');
            $table->foreignId('travel_option_id')->constrained(table: 'travel_options', indexName: 'user_travel_options_travel_option_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_travel_options');
    }
};
