<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->string('nav_one',12);
            $table->string('nav_two',12);
            $table->string('nav_three',12);
            $table->string('nav_four',12);
            $table->string('nav_five',12);
            $table->string('nav_six',12);
            $table->string('nav_seven',12);
            $table->string('nav_eight',12);
            $table->string('logo',255);
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
        Schema::dropIfExists('navbars');
    }
}
