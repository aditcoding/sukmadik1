<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('jurusans', function (Blueprint $table) {
        $table->id('id_jurusan');
        $table->string('nama_jurusan');
        $table->unsignedBigInteger('id_kampus');

        $table->timestamps();

        $table->foreign('id_kampus')
              ->references('id_kampus')
              ->on('kampuses')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurusans');
    }
};
