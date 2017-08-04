<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXeTrangbisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xe_trangbis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_xes') ->unsigned();
            $table->integer('value');
            $table->foreign('id_xes') ->references('id') ->on('xes')->onDelete('cascade') ;
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
        Schema::dropIfExists('xe_trangbis');
    }
}
