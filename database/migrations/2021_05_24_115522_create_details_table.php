<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('thana',50);
            $table->string('district',50);
            $table->integer('house_no');
            $table->string('floor_no',50);
            $table->string('road_no',255);
            $table->string('sector',50);
            $table->string('uk_road',255);
            $table->bigInteger('uk_phone');
            $table->string('working_hours',255);
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
        Schema::dropIfExists('details');
    }
}
