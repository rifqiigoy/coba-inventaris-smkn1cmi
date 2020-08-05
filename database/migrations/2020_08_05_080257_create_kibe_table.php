<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibe', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('kode', 18);
            $table->char('register', 4);
            $table->string('lokasi');
            $table->string('merk');
            $table->char('tahun', 4);
            $table->integer('jumlah');
            $table->bigInteger('harga');
            $table->bigInteger('nilai');
            $table->integer('akumulasi');
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
        Schema::dropIfExists('kibe');
    }
}
