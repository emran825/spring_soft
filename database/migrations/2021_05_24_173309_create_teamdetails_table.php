<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamdetails', function (Blueprint $table) {
            $table->id();
            $table->string('title_name',255);
            $table->string('highlite_name',255);
            $table->string('next_title',255);
            $table->longText('team_details');
            $table->string('bg_image',255);
            $table->string('team_image',255);
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
        Schema::dropIfExists('teamdetails');
    }
}
