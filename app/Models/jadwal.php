<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $primaryKey = 'Id_Jadwal';
    protected $fillable = ['Hari'];

    public function sesi() {
        return $this->hasMany(sesi::class, 'Id_sesi');
    }
}
