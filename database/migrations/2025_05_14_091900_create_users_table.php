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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nip')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->tinyInteger('level');
            $table->string('password');
           $table->unsignedBigInteger('id_prodi');
            $table->foreign('id_prodi')
                ->references('id_prodi') // kolom yang dirujuk
                ->on('prodis')            // tabel asal foreign key
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
