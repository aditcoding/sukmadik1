<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
       protected $primaryKey = 'id_prodi';
    protected $fillable = ['nama_prodi', 'id_jurusan'];

    public function jurusan() {
        return $this->belongsTo(kampus::class, 'id_jurusan');
    }

    public function user() {
        return $this->hasMany(user::class, 'id_prodi');
    }
}
