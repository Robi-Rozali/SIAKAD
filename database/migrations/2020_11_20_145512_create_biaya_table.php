<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->string('jurusan', 100);
            $table->string('pendaftaran', 100);
            $table->string('upp', 100);
            $table->string('usb', 100);
            $table->string('sks', 100);
            $table->string('ppspp', 100);
            $table->string('almamater', 100);
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
        Schema::dropIfExists('biaya');
    }
}
