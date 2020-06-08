<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyForTransaksiMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_metas', function (Blueprint $table) {
            //$table->foreign('id_transaksi')->references('id')->on('transaksis')->onDelete('cascade');
            //$table->foreign('id_kategori')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_metas', function (Blueprint $table) {
        //$table->dropForeign('tansaksi_metas_id_transaksi_foreign');
        //$table->dropForeign('tansaksi_metas_id_kategori_foreign');
        });
    }
}
