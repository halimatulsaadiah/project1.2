<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKedatangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedatangans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('minit_mesyuarat_id');
            $table->string('name');
            $table->timestamps();


            $table->foreign('minit_mesyuarat_id')->references('id')->on('minit_mensyuarats')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kedatangans');
    }
}
