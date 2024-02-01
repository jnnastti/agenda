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
        Schema::create('day_engagement', function (Blueprint $table) {
            $table->id();
            $table->integer('day_id')->references('id')->on('day')->onDelete('cascade');
            $table->string('title', 100)->default('Novo compromisso');
            $table->text('description')->nullable();
            $table->enum('status', ['Pendente', 'Concluido', 'Cancelado'])->default('Pendente');
            $table->time('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_engagement');
    }
};
