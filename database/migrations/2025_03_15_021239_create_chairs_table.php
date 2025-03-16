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
        Schema::create('chairs', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->boolean('is_reserved')->default(false);
            $table->time('avg_time')->nullable();
            $table->foreignId('barbershop_id')->constrained('barbershops')->onDelete('cascade');
            $table->foreignId('barber_id')->constrained('barbers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chairs');
    }
};
