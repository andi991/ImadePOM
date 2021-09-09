<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_surat',
        'alamat',
        'bulan',
        'kecamatan',
        'kabupaten',
        'temuan',
        'jumlah_temuan',
        'nama_sarana',
        'telepon',
        'pemilik_sarana',
        'penanggungjawab',
        'izin_sarana',
        'jenis_sarana',
    ];
}
