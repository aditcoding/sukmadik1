<?php

use App\Models\User;
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
        Schema::create('detail_jadwal_absensis', function (Blueprint $table) {
            $table->id('id_d_jadwal_absensi');
            $table->string('image');
            $table->dateTime('jam_dan_tanggal');
            $table->enum('status', ['hadir', 'izin', 'alpha']);
            $table->foreignIdFor(User::class, 'id_user')
                ->constrained('users', 'id_user')
            ;
            $table->decimal('longitude')->nullable();
            $table->decimal('latitude')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_jadwal_absensis');
    }
};
