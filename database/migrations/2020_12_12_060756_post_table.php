<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post',function (Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('donor_id');
            $table->string('status'); //for check button
            $table->timestamps();

            //$table->foreign('post_id')->references('id')->on('donor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
