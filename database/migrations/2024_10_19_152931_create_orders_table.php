<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_order');
            $table->string('bulan')->nullable();
            $table->string('nama_buyer');
            $table->string('marking_code');
            $table->string('pengiriman_via');
            $table->string('posisi_produk')->nullable();
            $table->string('estimasi_bongkar')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

