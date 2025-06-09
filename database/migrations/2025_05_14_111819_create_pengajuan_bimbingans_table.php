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
        Schema::create('pengajuan_bimbingans', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->string('nama_pengajuan');
            $table->string('nim');
            $table->text('catatan');
            $table->date('tanggal');

            // Ganti enum ke varchar dengan default 'menunggu'
            $table->string('status', 20)->default('menunggu');

            $table->timestamps();

            // Relasi
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('id_kampus');
            $table->foreign('id_kampus')->references('id_kampus')->on('kampuses')->onDelete('cascade');

            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id_jurusan')->on('jurusans')->onDelete('cascade');

            $table->unsignedBigInteger('id_prodi');
            $table->foreign('id_prodi')->references('id_prodi')->on('prodis')->onDelete('cascade');
             $table->unsignedBigInteger('id_semester');
            $table->foreign('id_semester')->references('id_semester')->on('semesters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_bimbingans');
    }
};
