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
        Schema::create('harga_harian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('varian_id');
            $table->foreign('varian_id')->references('id')->on('varian_pangan')->cascadeOnDelete();

            $table->date('tanggal');

            $table->integer('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga_harian');
    }
};
