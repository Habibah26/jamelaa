<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjang', function (Blueprint $table) {
            $table->bigIncrements('Nama');
            $table->bigInteger('Nomor Telepon');
            $table->bigInteger('Alamat');
            $table->string('Provinsi');
            $table->string('Kabupaten/Kota');
            $table->integer('Kelurahan');
            $table->integer('Kode Pos');
            $table->integer('Kode Barang');
            $table->integer('Jumlah Orderan');
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
        Schema::dropIfExists('keranjang');
    }
}
