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
        Schema::create('day', function (Blueprint $table) {
            $table->id();
            $table->integer('week_id')->references('id')->on('week')->onDelete('cascade');
            $table->enum('humor', ['Muito ruim', 'Ruim', 'Normal', 'Bom', 'Muito bom'])->default('Normal');
            $table->integer('water')->default(0);
            $table->string('notes', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day');
    }
};
