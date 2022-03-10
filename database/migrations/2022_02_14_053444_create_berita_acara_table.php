<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaAcaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita_acara', function (Blueprint $table) {
            $table->increments('no');
            $table->date('tanggal');
            $table->string('bagian',45);
            $table->string('di_terima_dari',45);
            $table->integer('no_rek');
            $table->string('nama_barang',45);
            $table->string('penerimaan_faktur',45);
            $table->integer('OPL_no');
            $table->integer('volume_menurut_faktur');
            $table->integer('volume_menurut_kenyataan');
            $table->integer('volume_selisih');
            $table->string('keterangan',200);
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
        Schema::dropIfExists('berita_acara');
    }
}
