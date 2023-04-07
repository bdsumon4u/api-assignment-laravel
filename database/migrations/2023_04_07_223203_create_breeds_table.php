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
        Schema::create('breeds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('size', ['Tiny', 'Small', 'Medium', 'Large']);
            $table->enum('friendliness', [range(1, 5)]);
            $table->enum('trainability', [range(1, 5)]);
            $table->enum('shedding_amount', [range(1, 5)]);
            $table->enum('exercise_needs', [range(1, 5)]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('breeds');
    }
};
