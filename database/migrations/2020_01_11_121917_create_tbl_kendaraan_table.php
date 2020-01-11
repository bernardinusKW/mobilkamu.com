<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kendaraan', function (Blueprint $table) {
            $table->bigIncrements('id_kendaraan');
            $table->integer('id_brands');
            $table->string('nama_mobil', 255);
            $table->string('harga_mobil', 50);
            $table->string('variant_mobil', 50);
            $table->string('lokasi', 50);
            $table->string('transmission', 255);
            $table->string('bahan_bakar', 25);
            $table->string('length', 25);
            $table->string('width', 25);
            $table->string('height', 25);
            $table->string('wheelbase', 25);
            $table->string('fronttread', 25);
            $table->string('reartread', 25);
            $table->string('frontsuspension', 25);
            $table->string('rearsuspension', 25);
            $table->string('frontbrake', 25);
            $table->string('rearbrake', 25);
            $table->string('steeringgear', 25);
            $table->string('tiressize', 25);
            $table->string('serialno', 25);
            $table->string('displacement', 25);
            $table->string('borexstroke', 25);
            $table->string('maximumoutputpsrpm', 25);
            $table->string('maximumtourquekgrpm', 25);
            $table->string('fuelsystem', 25);
            $table->tinyInteger('status_kendaraan');
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
        Schema::dropIfExists('tbl_kendaraan');
    }
}
