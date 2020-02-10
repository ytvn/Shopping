<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->bigIncrements('bill_id')->unique()->unsigned();
            $table->integer('user_id');
            $table->bigInteger("total");
            $table->string("address")->nullable();
            $table->string("number")->nullable();
            $table->timestamps();

            // $table->foreign('category_id')->references('category_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill');
    }
}
