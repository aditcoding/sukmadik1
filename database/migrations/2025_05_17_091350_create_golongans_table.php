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
        Schema::create('golongans', function (Blueprint $table) {
            $table->id('id_golongan');
            $table->string('nama_golongan');
            $table->unsignedBigInteger('id_semester');
            $table->foreign('id_semester')->references('id_semester')->on('semesters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('golongans');
    }
};
