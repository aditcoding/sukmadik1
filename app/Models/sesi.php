<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sesi extends Model
{
    protected $primaryKey = 'id_sesi';
    protected $fillable = ['nama', 'start', 'end', 'id_jadwal'];

    public function detail_sesi()
    {
        return $this->hasMany(detail_sesi::class, 'id_d_sesi');
    }
    

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class, 'id_jadwal');
    }
}
