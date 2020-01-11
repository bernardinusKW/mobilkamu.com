<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_komentar', function (Blueprint $table) {
            $table->bigIncrements('id_kometar');
            $table->Integer('id_kendaraan');
            $table->text('komentar');            
            $table->Integer('total_upvote');
            $table->Integer('total_downvote');
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
        Schema::dropIfExists('tbl_komentar');
    }
}
