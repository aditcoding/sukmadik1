<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class golongan extends Model
{
    protected $primaryKey = 'id_golongan';
    protected $fillable = [
        'nama_golongan',
        'id_semester',
        
    ];
    public function detail_Sesi()
    {
        return $this->hasMany(detail_Sesi::class, 'id_golongan');
    }
}
