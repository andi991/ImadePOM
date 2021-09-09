<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->text('nama')->nullable();
            $table->string('no_surat')->unique();
            $table->text('alamat');
            $table->date('bulan');
            $table->text('kecamatan');
            $table->enum('kabupaten', ['Buleleng', 'Jembrana']);
            $table->text('temuan');
            $table->string('jumlah_temuan');
            $table->text('nama_sarana');
            $table->string('telepon');
            $table->text('pemilik_sarana');
            $table->text('penanggungjawab');
            $table->text('izin_sarana');
            $table->text('jenis_sarana');
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
