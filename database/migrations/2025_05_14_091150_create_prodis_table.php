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
            Schema::create('prodis', function (Blueprint $table) {
            $table->id('id_prodi');
            $table->string('nama_prodi');
            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')
                ->references('id_jurusan') // kolom yang dirujuk
                ->on('jurusans')            // tabel asal foreign key
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
