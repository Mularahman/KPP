<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWirelessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wirelesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ip_wire');
            $table->string('device_name');
            $table->string('tipe');
            $table->string('lokasi');
            $table->string('mode');
            $table->string('merk');
            $table->string('series');
            $table->string('tgl_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wirelesses');
    }
}
