<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_jadwal_absensi extends Model
{
    protected $primaryKey = 'id_d_jadwal_absensi';
    protected $fillable = [
    'image',
    'status',
    'id_d_jadwal',
    'id_user',
    'latitude',
    'longitude',
    'jam_dan_tanggal',
];


    public function detail_sesi()
    {
        return $this->belongsTo(detail_sesi::class, 'id_d_sesi');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }
    
}
