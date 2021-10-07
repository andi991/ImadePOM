<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->text('nama_petugas');
            $table->text('nama_sarana');
            $table->text('jenis_sarana');
            $table->date('tanggal_periksa');
            $table->enum('kategori_pemeriksaan', ['Pengawasan Produksi', 'Pengawasan Distribusi']);
            $table->enum('kabupaten', ['Jembrana', 'Buleleng']);
            $table->text('kecamatan');
            $table->enum('kategori_temuan', ['Memenuhi Ketentuan', 'Tidak Memenuhi Ketentuan'])-> nullable();
            $table->enum('kategori_tindak_lanjut', ['Pembinaan', 'Peringatan', 'Peringatan Keras', 'Hasil Pemeriksaan'])-> nullable();
            $table->text('no_surat_tindak_lanjut')-> nullable();
            $table->date('tanggal_surat_tindak_lanjut')-> nullable();
            $table->date('batas_waktu')-> nullable();
            $table->enum('status_laporan', ['Terlambat', 'Tidak Terlambat']);
            $table->date('tanggal_capa1')-> nullable();
            $table->date('batas_tanggal_capa1') -> nullable();
            $table->enum('status_capa1', ['Tepat Waktu', 'Terlambat', 'Belum Dikirim']);
            $table->date('tanggal_open_capa1')-> nullable();
            $table->date('tanggal_close_capa1') -> nullable();
            $table->enum('evaluasi_capa1', ['Open', 'Close']);
            $table->date('tanggal_open_capa2') -> nullable();
            $table->date('tanggal_close_capa2') -> nullable();
            $table->longText('keterangan_feedback_lintas_sektor')-> nullable();
            $table->text('sipt') -> nullable();
            $table->text('spv') -> nullable();
            $table->longText('keterangan') -> nullable();
            $table->enum('status', ['Sudah Diperiksa', 'Belum Diperiksa', 'Akan Diperiksa'])-> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaans');
    }
}
