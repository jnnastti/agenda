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
        Schema::create('day_diet', function (Blueprint $table) {
            $table->id();
            $table->integer('day_id')->references('id')->on('day')->onDelete('cascade');
            $table->enum('period', ['Café da manhã', 'Almoço', 'Café da tarde', 'Janta', 'Outra'])->nullable();
            $table->string('notes', 700)->nullable();
            $table->integer('grade')->default(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_diet');
    }
};
