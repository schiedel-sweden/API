<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelFileTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('excels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material')->nullable();
            $table->string('designation')->nullable();
            $table->string('gross')->nullable();
            $table->string('currency')->nullable();
            $table->string('price_factor')->nullable();
            $table->string('unit_price')->nullable();
            $table->boolean('is_deleted')->default('0');
            $table->softDeletes();
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
        Schema::dropIfExists('excels');
    }
}
