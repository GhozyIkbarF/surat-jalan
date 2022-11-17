<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'nip', 'jabatan', 'pangkat', 'golongan'
    ];
    public function Biayas()
    {
        return $this->hasMany(Biaya::class);
    }
}
