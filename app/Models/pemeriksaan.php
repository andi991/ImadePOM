<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pemeriksaan extends Model
{
    use HasFactory;
    protected $table = "pemeriksaans";
    protected $fillable = [
        'nama_petugas',
        'nama_sarana',
        'jenis_sarana',
        'tanggal_periksa',
        'kategori_pemeriksaan',
        'kabupaten',
        'kecamatan',
        'kategori_temuan',
        'kategori_tindak_lanjut',
        'no_surat_tindak_lanjut',
        'tanggal_surat_tindak_lanjut',
        'batas_waktu',
        'status_laporan',
        'tanggal_capa1',
        'batas_tanggal_capa1',
        'status_capa1',
        'tanggal_open_capa1',
        'tanggal_close_capa1',
        'evaluasi_capa1',
        'tanggal_open_capa2',
        'tanggal_close_capa2',
        'keterangan_feedback_lintas_sektor',
        'sipt',
        'spv',
        'keterangan',
        'status',
        'created_at',
    ];

}
