<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kampus extends Model
{
    protected $primaryKey = 'id_kampus';
    protected $fillable = ['nama_kampus', 'alamat'];

    public function jurusan() {
        return $this->hasMany(Jurusan::class, 'id_kampus');
    }
}
