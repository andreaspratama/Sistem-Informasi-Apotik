<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat_masuks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_trans');
            $table->integer('obat_id');
            $table->integer('satuan_id');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->integer('suplaier_id');
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
        Schema::dropIfExists('obat_masuks');
    }
}
