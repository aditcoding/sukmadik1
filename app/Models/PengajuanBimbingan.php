<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanBimbingan extends Model
{
    protected $table = 'pengajuan_bimbingans';

    protected $fillable = [
        'nama_pengajuan', 'nama', 'nim', 'catatan', 'tanggal', 'status',
        'id_user', 'id_kampus', 'id_jurusan', 'id_prodi', 'id_semester'
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }

    public function kampus()
    {
        return $this->belongsTo(kampus::class, 'id_kampus');
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan');
    }

    public function prodi()
    {
        return $this->belongsTo(prodi::class, 'id_prodi');
    }

    public function detail_sesi()
    {
    return $this->hasMany(detail_sesi::class, 'id_d_sesi');
    }
}
