<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailJadwal extends Model
{
    protected $table = 'detail_jadwals'; // Sesuaikan dengan nama tabel

    // Relasi ke tabel mata kuliah
    public function matkul()
    {
        return $this->belongsTo(matkul::class, 'id_matkul');
    }

    // Relasi ke dosen (dari tabel users)
    public function dosen()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
