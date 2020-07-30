<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_transaksis', function (Blueprint $table) {
            $table->id('id');
            $table->integer('jumlah_tiket');
            //foreign transaksi untuk membuat detail
            $table->biginteger('id_transaksi')->unsigned();
            $table->biginteger('id_data_tiket')->unsigned();
            $table->integer('harga');
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
        Schema::dropIfExists('meta_transaksis');
    }
}
