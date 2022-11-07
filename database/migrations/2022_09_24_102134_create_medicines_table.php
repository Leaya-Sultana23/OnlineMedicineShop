<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('supplier_id');
            $table->string('cat_id');
            $table->string('subcat_id');
            $table->string('image');
            $table->date('import_date');
            $table->date('expire_date');
            $table->decimal('price');
            $table->bigInteger('quantity');
            $table->integer('discount')->nullable()->default('0');
            $table->float('dis_amount')->nullable()->default('0');
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
        Schema::dropIfExists('medicines');
    }
}
