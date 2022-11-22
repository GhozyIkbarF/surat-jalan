<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pegawai;

class Biaya extends Model
{
    use HasFactory;
    protected $fillalble = [
        'kegiatan', 'lokasi', 'tanggal', 'kode_rek', 'nama1', 'nama2', 'nama3', 'jabatan1', 'jabatan2', 'jabatan3', 'golongan1', 'golongan2', 'golongan3', 'uang_harian1', 'uang_harian2', 'uang_harian3', 'uang_transport1', 'uang_transport2', 'uang_transport3', 'biaya_transport1', 'biaya_transport2', 'biaya_transport3', 'penerimaan1', 'penerimaan2', 'penerimaan3'
    ];
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
