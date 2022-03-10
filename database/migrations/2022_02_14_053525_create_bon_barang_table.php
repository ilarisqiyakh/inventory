<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bon_barang', function (Blueprint $table) {
            $table->string('kode_barang',10);
            $table->string('nama_barang',45);
            $table->string('satuan',45);
            $table->integer('sisa_seb_dikeluarkan');
            $table->integer('diminta');
            $table->integer('disetujui');
            $table->integer('dikeluarkan');
            $table->integer('harga_satuan');
            $table->integer('jumlah');
            $table->integer('no_rek');
            $table->string('obyek',45);
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
        Schema::dropIfExists('bon_barang');
    }
}
