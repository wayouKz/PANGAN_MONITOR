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
        Schema::create('varian_pangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('komoditas_id');
            $table->foreign('komoditas_id')->references('id')->on('komoditas_pangan')->cascadeOnDelete();
            $table->string('nama_varian');
            $table->integer('kuantitas')->default(1);
            $table->string('satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varian_pangan');
    }
};
