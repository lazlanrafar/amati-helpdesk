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
        Schema::create('switch_hubs', function (Blueprint $table) {
            $table->id();
            $table->integer('idbrand');
            $table->integer('idlok');
            $table->string('jenis_switch');
            $table->integer('jumlah_port');
            $table->string('jenis_port');
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
        Schema::dropIfExists('switch_hubs');
    }
};
