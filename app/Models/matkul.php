<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    protected $primaryKey = 'id_matkul';
    protected $fillable = ['nama_matkul', 'id_user'];

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }
    public function detail_sesis()
    {
        return $this->hasMany(detail_Sesi::class, 'id_d_sesi');
    }
}
