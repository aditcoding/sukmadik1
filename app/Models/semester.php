<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    protected $primaryKey = 'id_semester';
    protected $fillable = ['semester', 'ajaran',];

    public function jadwal()
    {
        return $this->hasMany(jadwal::class, 'id_semester');
    }

    public function pengajuan_bimbingan()
    {
        return $this->hasMany(pengajuan_bimbingan::class, 'id_semester');
    }

    public function golongan()
    {
        return $this->hasMany(golongan::class, 'id_semester');
    }
}
