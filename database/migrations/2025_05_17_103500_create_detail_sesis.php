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
        Schema::create('detail_sesis', function (Blueprint $table) {
             $table->id('id_d_sesi');
            $table->unsignedBigInteger('id_sesi');
            $table->foreign('id_sesi')->references('id_sesi')->on('sesis')->onDelete('cascade');
            $table->unsignedBigInteger('id_pengajuan')->nullable();
            $table->foreign('id_pengajuan')->references('id_pengajuan')->on('pengajuan_bimbingans')->onDelete('cascade');
            $table->unsignedBigInteger('id_matkul')->nullable();
            $table->foreign('id_matkul')->references('id_matkul')->on('matkuls')->onDelete('cascade');
            $table->unsignedBigInteger('id_golongan');
            $table->foreign('id_golongan')->references('id_golongan')->on('golongans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_sesis');
    }
};
