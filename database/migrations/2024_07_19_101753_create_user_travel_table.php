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
        Schema::create('user_travel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('phone');
            $table->date('date');
            $table->integer('participants');
            $table->integer('total');
            // $table->foreignId('user_id')->constrained(table: 'users', indexName: 'user_travel_user_id');
            $table->foreignId('travel_id')->constrained(table: 'travel', indexName: 'user_travel_travel_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_travel');
    }
};
