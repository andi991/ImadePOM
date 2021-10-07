<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_models', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->string('no_surat');
            $table->text('alamat');
            $table->text('bulan');
            $table->text('kecamatan');
            $table->enum('kabupaten', ['Jembrana', 'Buleleng']);
            $table->text('temuan');
            $table->text('jumlah_temuan');
            $table->text('keterangan_temuan');
            $table->date('tanggal_surat_tindak1');
            $table->string('no_surat_tindak1');
            $table->date('batas_waktu');
            $table->text('lama_laporan');
            $table->text('status_laporan');
            $table->date('tanggal_surat_tindak2');
            $table->date('tanggal_capa1');
            $table->date('batas_tanggal_capa1');
            $table->text('status_capa1');
            $table->date('tanggal_open_capa1');
            $table->date('tanggal_feedback');
            $table->date('tanggal_imput_sipt');
            $table->date('tanggal_terkirim_spv1');
            $table->text('keterangan');
            $table->enum('status', ['Sudah Diperiksa', 'Belum Diperiksa', 'Akan Diperiksa']);
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
        Schema::dropIfExists('test_models');
    }
}
