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
        Schema::create('month_activity', function (Blueprint $table) {
            $table->id();
            $table->integer('month_id')->references('id')->on('month')->onDelete('cascade');
            $table->enum('frequency_month', ['Diário', 'Semanal', 'Mensal'])->default('Diário');
            $table->integer('frequency_week')->nullable();
            $table->boolean('finished')->default(false);
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('month_activity');
    }
};
