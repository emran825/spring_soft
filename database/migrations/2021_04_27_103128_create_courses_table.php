<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name',255);
            $table->string('course_tye',50);
            $table->string('course_details',255);
            $table->string('course_duration',255);
            $table->integer('no_ofclass');
            $table->integer('total_hours');
            $table->string('reg_deadline',255);
            $table->string('class_schedule',255);
            $table->string('venue',255);
            $table->integer('course_price');
            $table->integer('is_complete')->default(0);
            $table->string('course_image',255);
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
        Schema::dropIfExists('courses');
    }
}
