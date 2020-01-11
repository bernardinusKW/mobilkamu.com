<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBrandTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_brand', function (Blueprint $table) {
            $table->bigIncrements('id_brand');
            $table->string('nama_brand', 50);
            $table->text('deskripsi_brand');            
            $table->tinyInteger('status_brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_brand');
    }

}
