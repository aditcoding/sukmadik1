<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
   protected $primaryKey = 'id_jurusan';
    protected $fillable = ['nama_jurusan', 'id_kampus'];

    public function kampus() {
        return $this->belongsTo(kampus::class, 'id_kampus');
    }

    public function prodi() {
        return $this->hasMany(Prodi::class, 'id_jurusan');
    }
}
