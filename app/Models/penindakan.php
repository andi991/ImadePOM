<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penindakan extends Model
{
    protected $table = "penindakans";
    protected $primaryKey = "id";
    protected $fillable = [
        'temuan_id',
        'no_surat_tugas',
        'no_lhp',
        'nama_sarana',
        'alamat',
        'kabupaten',
        'telepon',
        'pemilik',
        'golongan',
        'uraian_temuan',
        'kategori_temuan',
        'tindakan',
        'tanggal',
        'kesimpulan',
        'tindak_lanjut',
        'tempat_simpan',
        'status',
    ];

    public function temuan()
    {
        return $this->hasMany(temuanPenindakan::class);
    }
}
