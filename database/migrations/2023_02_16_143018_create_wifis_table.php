<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWifisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wifis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ip_wifi');
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
        Schema::dropIfExists('wifis');
    }
}
