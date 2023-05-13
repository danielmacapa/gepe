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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name');
            $table->integer('strenght');
            $table->integer('agility');
            $table->integer('wits');
            $table->integer('empathy');
            $table->foreignId('race_id')->constrained();
            $table->foreignId('profession_id')->constrained();
            $table->foreignId('player_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};