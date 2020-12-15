<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJurusanToPerwalian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perwalian', function (Blueprint $table) {
            $table->string('jurusan', 100)->after('nama');
            $table->string('semester', 100)->after('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perwalian', function (Blueprint $table) {
            //
        });
    }
}
