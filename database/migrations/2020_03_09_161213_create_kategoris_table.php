<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode');
            $table->string('nama',25);
            $table->integer('harga');
            $table->enum('kategori_hari',['libur','kerja']);
            $table->BigInteger('id_asuransi')->unsigned();
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
        Schema::dropIfExists('kategoris');
    }
}
