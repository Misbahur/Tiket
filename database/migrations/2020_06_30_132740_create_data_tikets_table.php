<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tikets', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode');
            $table->string('nama',25);
            $table->integer('harga');
            $table->enum('kategori_hari',['libur','kerja']);
            $table->integer('asuransi');
             //foreign asuransi on migration create foreign keys kategoris
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
        Schema::dropIfExists('data_tikets');
    }
}
