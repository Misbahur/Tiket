<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTansaksiMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tansaksi_metas', function (Blueprint $table) {
            $table->id('id');
            $table->biginteger('id_transaksi')->unsigned()->nullable();
            $table->biginteger('id_kategori')->unsigned()->nullable();
            $table->integer('jumlah');
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
        Schema::dropIfExists('tansaksi_metas');
    }
}
