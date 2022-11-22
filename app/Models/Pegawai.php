<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Biaya;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'nip', 'jabatan', 'pangkat', 'golongan'
    ];
    public function biaya()
    {
        return $this->belongsTo(Biaya::class);
    }
    public function spts()
    {
        return $this->belongsTo(Biaya::class);
    }
}
