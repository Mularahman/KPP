<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCctvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cctvs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ip_cctv');
            $table->string('device_name');
            $table->string('tipe');
            $table->string('lokasi');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('cctvs');
    }
}
