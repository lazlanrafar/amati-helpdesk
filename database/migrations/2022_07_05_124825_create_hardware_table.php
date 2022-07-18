<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hardware', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('idbrand');
            $table->integer('idlok');
            $table->string('jenis_hardware');
            $table->string('koneksi');
            $table->string('ipaddress')->nullable();
            $table->string('computer_name')->nullable();
            $table->string('sharing');
            $table->date('tgl_inventaris');
            $table->string('keterangan');
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
        Schema::dropIfExists('hardware');
    }
};
