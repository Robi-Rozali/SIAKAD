<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 100);
            $table->string('nama', 100);
            $table->string('jurusan', 100);
            $table->year('tahun');
            $table->string('kode', 100);
            $table->string('matakuliah', 100);
            $table->integer('sks');
            $table->string('kehadiran', 100);
            $table->string('tugas', 100);
            $table->string('uts', 100);
            $table->string('uas', 100);
            $table->string('jumlah', 100);
            $table->string('grade', 100);
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
        Schema::dropIfExists('nilai');
    }
}
