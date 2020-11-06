<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_trans');
            $table->integer('user_id');
            $table->integer('obat_id');
            $table->integer('kategori_id');
            $table->integer('satuan_id');
            $table->date('tanggal');
            $table->integer('jumlah');
            $table->string('harga_sat');
            $table->string('tot_harga');
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
        Schema::dropIfExists('penjualans');
    }
}
