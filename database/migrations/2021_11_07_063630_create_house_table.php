<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house', function (Blueprint $table) {
            $table->String('house_id')->primary();
            $table->Integer('luas_tanah');
            $table->Integer('luas_bangunan');
            $table->Integer('kamar_tidur');
            $table->Integer('kamar_mandi');
            $table->Integer('harga');
            $table->String('gambar');
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
        Schema::dropIfExists('house');
    }
}
