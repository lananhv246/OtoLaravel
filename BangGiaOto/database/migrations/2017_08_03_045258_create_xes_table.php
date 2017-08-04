<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hangxes') ->unsigned();
            $table->integer('id_loaixes') ->unsigned();
            $table->string('name');
            $table->string('alias');
            $table->string('image');
            $table->string('nguongoc');
            $table->integer('gia_niem_yet');
            $table->integer('gia_dam_phan');
            $table->string('dongco');
            $table->integer('congxuat');
            $table->foreign('id_hangxes') ->references('id') ->on('hangxes')->onDelete('cascade') ;
            $table->foreign('id_loaixes') ->references('id') ->on('loaixes')->onDelete('cascade') ;
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
        Schema::dropIfExists('xes');
    }
}
