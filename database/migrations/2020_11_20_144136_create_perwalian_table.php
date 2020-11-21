<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerwalianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perwalian', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 100);
            $table->string('nama', 100);
            $table->integer('pengambilan');
            $table->string('kode', 100);
            $table->string('matakuliah', 100);
            $table->integer('sks');
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
        Schema::dropIfExists('perwalian');
    }
}
