<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrangbixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trangbixes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_xe_trangbi') ->unsigned();
            $table->string('tbx_name');
            $table->foreign('id_xe_trangbi') ->references('id') ->on('xe_trangbis')->onDelete('cascade') ;
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
        Schema::dropIfExists('trangbixes');
    }
}
