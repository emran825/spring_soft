<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhylearnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whylearns', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('learns_id')->unsigned()->nullable(); 
            $table->string('why_learn')->nullable();
            $table->bigInteger('course_id')->unsigned()->nullable();
            
            $table->timestamps();
            $table->foreign('learns_id')->references('id')->on('learns')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whylearns');
    }
}
