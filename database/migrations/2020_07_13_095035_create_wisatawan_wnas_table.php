<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatawanWnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisatawan_wnas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama');
            $table->enum('jenis_klamin',['L','P']);
            $table->string('kebangsaan');
            $table->BigInteger('id_transaksi_meta')->unsigned();
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
        Schema::dropIfExists('wisatawan_wnas');
    }
}
