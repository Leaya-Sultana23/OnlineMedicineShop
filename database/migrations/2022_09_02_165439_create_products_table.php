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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id');
            $table->integer('cat_id');
            $table->integer('subcat_id');
            $table->string('product_name');
            $table->string('slug');
            $table->integer('product_code');
            $table->float('product_price');
            $table->float('discount')->nullable();
            $table->float('discount_price')->nullable();
            $table->text('short_description');
            $table->text('long_description')->nullable();
            $table->string('thumbnails');
            $table->integer('quantity');
            $table->integer('status');
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
        Schema::dropIfExists('products');
    }
};
