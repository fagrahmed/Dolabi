<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardrobesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wardrobes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acc_id')->unsigned(); 
            $table->foreign('acc_id')->references('id')->on('accounts');
            $table->string('w_shirts');
            $table->string('w_pants');
            $table->string('w_dresses');
            $table->string('w_shoes');
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
        Schema::dropIfExists('wardrobes');
    }
}
