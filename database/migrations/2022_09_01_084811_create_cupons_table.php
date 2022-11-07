<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {

            $table->increments('id');
            $table->string('cupon_code');
            $table->float('discount');
            $table->float('discount_amount');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('status')->comment("1 for active 2 for inactive");
            $table->integer('product_id');
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
        Schema::dropIfExists('cupons');
    }
};
