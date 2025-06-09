<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

// Import semua model yang dipakai
use App\Models\Prodi;
use App\Models\pengajuanBimbingan;
use App\Models\Matkul;
use App\Models\DetailJadwalAbsensi;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id_user';

    protected $fillable = ['nip', 'nama', 'email', 'level', 'password', 'id_prodi'];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function pengajuanBimbingans(): HasMany
    {
        return $this->hasMany(pengajuan_bimbingan::class, 'id_user');
    }

    public function matkuls(): HasMany
    {
        return $this->hasMany(Matkul::class, 'id_user');
    }

    public function detailJadwalAbsensis(): HasMany
    {
        return $this->hasMany(detail_jadwal_absensi::class, 'id_user');
    }
}
