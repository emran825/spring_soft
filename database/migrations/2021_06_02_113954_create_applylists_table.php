<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applylists', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email',255);
            $table->string('contact',255);
            $table->longText('pev_job_role');
            $table->string('city',50);
            $table->string('gender',50);
            $table->string('resume',255);
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
        Schema::dropIfExists('applylists');
    }
}
