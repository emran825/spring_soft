<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_keys_id')->unsigned()->nullable(); 
            $table->string('key_features')->nullable();
            $table->bigInteger('product_id')->unsigned()->nullable();
            
            $table->timestamps();
            $table->foreign('product_keys_id')->references('id')->on('product_keys')->onDelete('cascade');
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
        Schema::dropIfExists('key_features');
    }
}
