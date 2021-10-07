<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temuanPenindakan extends Model
{
    protected $table = "temuan";
    protected $primaryKey ="id";
    protected $foreignKey ="penindakan_id";
    protected $fillable = [
        'penindakan_id',
        'nama_produk',
        'bentuk',
        'registrasi',
        'batch',
        'exp_date',
        'kategori',
        'produsen',
        'satuan',
        'jumlah',
        'nilai_satuan',
        'total_nilai_satuan',
        'justifikasi',
    ];
    
    public function penindakan()
    {
        return $this->belongsToMany(penindakan::class);
    }

}
