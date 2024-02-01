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
        Schema::create('month_evolutions', function (Blueprint $table) {
            $table->id();
            $table->integer('month_id')->references('id')->on('month')->onDelete('cascade');
            $table->integer('grade')->nullable();
            $table->enum('category', [
                'Profissional',
                'Saúde',
                'Amigos e família',
                'Espiritualidade',
                'Diversão',
                'Autocuidado',
                'Vida Social',
                'Finanças'
            ])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('month_evolutions');
    }
};
