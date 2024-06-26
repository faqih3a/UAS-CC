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
        Schema::create('perawatan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('km_mobil');
            $table->integer('biaya');
            $table->unsignedBigInteger('mobil_id');
            $table->unsignedBigInteger('jenis_perawatan_id');
            $table->foreign('mobil_id')->references('id')->on('mobil');
            $table->foreign('jenis_perawatan_id')->references('id')->on('jenis_perawatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawatan');
    }
};
