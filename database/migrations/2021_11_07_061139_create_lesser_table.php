<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLesserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessee', function (Blueprint $table) {
            $table->String('nik')->primary();
            $table->String('nama');
            $table->String('jenis_kelamin');
            $table->Integer('umur');
            $table->String('rented_house');
            $table->date('rent_from');
            $table->date('rent_until');
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
        Schema::dropIfExists('lesser');
    }
}
