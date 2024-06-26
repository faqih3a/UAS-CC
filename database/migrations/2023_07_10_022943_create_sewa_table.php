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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('tujuan');
            $table->unsignedBigInteger('mobil_id');
            $table->string('nama_customer');
            $table->integer('no_ktp');
            $table->foreign('mobil_id')->references('id')->on('mobil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
