<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiba', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('luas');
            $table->char('tahun', 4);
            $table->bigInteger('nilai');
            $table->string('opd');
            $table->string('sub_opd');
            $table->string('sub_opd_caps');
            $table->string('kota');
            $table->string('asal');
            $table->string('keterangan');
            $table->char('kode', 18);
            $table->string('jenis');
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
        Schema::dropIfExists('kiba');
    }
}
