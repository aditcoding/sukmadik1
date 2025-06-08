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
        Schema::create('detail_jadwals', function (Blueprint $table) {
            $table->id('Id_d_Jadwal');
            $table->time('Start');
            $table->time('End');
            $table->integer('SKS');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
                ->references('id_user') 
                ->on('users')            
                ->onDelete('cascade');
           $table->unsignedBigInteger('id_matkul');
            $table->foreign('id_matkul')
                ->references('id_matkul') 
                ->on('matkuls')            
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_jadwal');
            $table->foreign('id_jadwal')
                ->references('id_jadwal') 
                ->on('jadwals')            
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_jadwals');
    }
};
