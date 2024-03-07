<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nim')->unsigned();
            $table->string('nama');
            $table->string('jurusan');
            $table->string('kelamin');
            $table->string('universitas');
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_berakhir')->nullable();
            $table->string('cv')->nullable();
            $table->enum('status', ['Dalam Proses', 'Diterima', 'Ditolak']);
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
        Schema::dropIfExists('mahasiswa');
    }
}
