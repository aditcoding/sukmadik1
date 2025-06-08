<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailJadwal extends Model
{
    protected $table = 'detail_jadwals'; // Sesuaikan dengan nama tabel

    //Fillabel gae get data detail_jadwals yang di butuhkan
    protected $fillable = ['start', 'end', 'sks', 'id_user', 'id_matkul', 'id_jadwal'];

    // Relasi ke tabel mata kuliah yang akan di get
    public function dosen()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function matkul()
    {
        return $this->belongsTo(Matkul::class, 'id_matkul');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

}
