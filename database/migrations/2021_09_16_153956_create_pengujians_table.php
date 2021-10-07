<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengujiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengujians', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_tugas');
            $table->text('nama_petugas');
            $table->text('izin_sarana');
            $table->enum('jenis_sarana', ['Produksi', 'Distribusi']);
            $table->text('deputi');
            $table->enum('kabupaten', ['Buleleng', 'Jembrana']);
            $table->text('kecamatan');
            $table->text('temuan');
            $table->string('jumlah_temuan');
            $table->longText('keterangan_temuan');
            $table->enum('mk_tmk', ['Memenuhi Ketentuan', 'Tidak Memenuhi Ketentuan']);
            $table->enum('status', ['Sudah Diuji', 'Belum Diuji', 'Akan Diuji']);
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
        Schema::dropIfExists('pengujians');
    }
}
