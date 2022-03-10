<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->increments('no_penerima');
            $table->date('tanggal');
            $table->integer('no_rek');
            $table->string('faktur',45);
            $table->string('nama_barang',45);
            $table->string('OPL',45);
            $table->integer('volume_faktur');
            $table->integer('jumlah_barang');
            $table->integer('selisih_barang');
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
        Schema::dropIfExists('barang_masuk');
    }
}
