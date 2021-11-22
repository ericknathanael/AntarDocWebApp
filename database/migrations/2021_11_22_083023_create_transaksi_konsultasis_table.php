<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiKonsultasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_konsultasi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('id_transaction_sender');
            $table->integer('id_transaction_receiver');
            $table->integer('payment_value');
            $table->dateTime('date_start');
            $table->dateTime('date_finish');
            $table->smallInteger('status_konsultasi');
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
        Schema::dropIfExists('transaksi_konsultasis');
    }
}
