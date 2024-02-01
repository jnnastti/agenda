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
        Schema::create('week', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('month_id')->references('id')->on('month')->onDelete('cascade');
            $table->string('notes', 250)->nullable();
            $table->text('music');
            $table->string('discovery', 250);
            $table->timestamps();

            $table->primary(['id','month_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('week');
    }
};
