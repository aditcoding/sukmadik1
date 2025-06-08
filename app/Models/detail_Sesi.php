<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_Sesi extends Model
{
    protected $primaryKey = 'id_d_sesi';
    protected $fillable = ['id_sesi', 'id_pengajuan', 'id_matkul'];

    public function sesi()
    {
        return $this->belongsTo(sesi::class, 'id_sesi');
    }
    
    public function pengajuan_bimbingan()
    {
        return $this->belongsTo(pengajuan_bimbingan::class, 'id_pengajuan');
    }

    public function matkul()
    {
        return $this->belongsTo(matkul::class, 'id_matkul');
    }

    public function detail_jadwal_absensi()
    {
        return $this->hasMany(detail_jadwal_absensi::class, 'id_d_jadwal_absensi');
    }

    public function golongan()
    {
        return $this->belongsTo(golongan::class, 'id_golongan');
    }
}
