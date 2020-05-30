<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id');
            $table->dateTime('tanggal_transaksi', 0);
            $table->integer('jumlah_tiket');
            $table->integer('jumlah_harga');
            $table->integer('jumlah_asuransi');
            $table->integer('jumlah_total');
            $table->integer('jumlah_bayar');
            $table->BigInteger('id_pembayaran')->unsigned();
            //foreign pembayaran
            $table->BigInteger('id_user')->unsigned();
             //foreign user
            $table->BigInteger('id_kategori')->unsigned();
            //foreign kategori
            $table->BigInteger('id_asuransi')->unsigned();
            //foreign asuransi
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
        Schema::dropIfExists('transaksis');
    }
}
