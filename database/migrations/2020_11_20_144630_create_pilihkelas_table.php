<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihkelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihkelas', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 100);
            $table->string('nama', 100);
            $table->string('jurusan', 100);
            $table->year('tahun');
            $table->string('kode', 100);
            $table->string('matakuliah', 100);
            $table->string('kelas', 100);
            $table->string('ruang', 100);
            $table->string('hari', 100);
            $table->string('jam', 100);
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
        Schema::dropIfExists('pilihkelas');
    }
}
