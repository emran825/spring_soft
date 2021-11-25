<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_features_id')->unsigned()->nullable(); 
            $table->string('product_features')->nullable();
            $table->bigInteger('product_id')->unsigned()->nullable();
            
            $table->timestamps();
            $table->foreign('product_features_id')->references('id')->on('product_features')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('admin_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
