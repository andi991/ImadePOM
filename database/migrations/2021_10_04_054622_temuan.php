<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Temuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('temuan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penindakans_id');
            $table->text('nama_produk');
            $table->text('bentuk');
            $table->text('registrasi');
            $table->text('batch');
            $table->date('exp_date');
            $table->text('kategori');
            $table->text('produsen');
            $table->text('satuan');
            $table->text('jumlah');
            $table->text('nilai_satuan');
            $table->text('total_nilai_satuan');
            $table->text('justifikasi');
            $table->text('keterangan');
            $table->text('status');
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
        //
    }
}
