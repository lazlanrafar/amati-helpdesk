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
        Schema::create('s_s_i_d_s', function (Blueprint $table) {
            $table->id();
            $table->integer('idlok');
            $table->string('nama_ssid');
            $table->string('pwd_ssid');
            $table->string('jenis_ssid');
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
        Schema::dropIfExists('s_s_i_d_s');
    }
};
