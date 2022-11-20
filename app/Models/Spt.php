<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    use HasFactory;
    protected $fillable = ['dasar_perintah', 'pegawai_diperintah1', 'pegawai_diperintah2', 'pegawai_diperintah3', 'nip1', 'nip2', 'nip3', 'golongan1', 'golongan2', 'golongan3', 'jabatan1', 'jabatan2', 'jabatan3', 'maksud_tugas', 'hari_tanggal', 'waktu', 'tempat', 'tempat_ditetapkan', 'tanggal_ditetapkan', 'yang_menetapkan'];
    public function Pegawais()
    {
        return $this->hasMany(Pegawai::class);
    }
}
