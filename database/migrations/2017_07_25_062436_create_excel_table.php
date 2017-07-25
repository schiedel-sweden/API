<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcelTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('excel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material');
            $table->string('designation')->unique();
            $table->string('gross');
            $table->string('currency');
            $table->string('price_factor');
            $table->string('unit_price');
            $table->boolean('deleted')->default('0');
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
        Schema::dropIfExists('excel');
    }
}
