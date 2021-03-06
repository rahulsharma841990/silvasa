<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sliders',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
             $table->text('desc');
            $table->string('img');
            $table->string('link_to_post');
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
        Schema::dropIfexists('sliders');
    }
}
