<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengujian extends Model
{
    use HasFactory;

    protected $fillable =[
        'no_surat_tugas',
        'nama_petugas',
        'izin_sarana',
        'jenis_sarana',
        'deputi',
        'kabupaten',
        'kecamatan',
        'temuan',
        'jumlah_temuan',
        'keterangan_temuan',
        'mk_tmk',
        'status',
    ];
}
