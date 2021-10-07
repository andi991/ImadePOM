<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenindakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penindakans', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat_tugas')->unique();
            $table->string('no_lhp')->nullable();
            $table->text('nama_sarana')->nullable();
            $table->text('alamat');
            $table->enum('kabupaten', ['Buleleng', 'Jembrana']);
            $table->string('telepon');
            $table->text('pemilik')->nullable();
            $table->text('golongan');
            $table->text('uraian_temuan');
            $table->text('kategori_temuan');
            $table->text('tindakan');
            $table->date('tanggal');
            $table->text('kesimpulan');
            $table->text('tindak_lanjut');
            $table->enum('status', ['Sudah Ditindak', 'Akan Ditindak', 'Belum Ditindak']);
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
        Schema::dropIfExists('penindakans');
    }
}
