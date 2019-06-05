<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketsCasos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('año');
            $table->integer('mes');
            $table->integer('number');
            $table->timestamps();
        });
        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('caso_id');
        
            $table->foreign('caso_id')->references('id')->on('casos');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
