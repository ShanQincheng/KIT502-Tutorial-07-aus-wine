<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinesTable extends Migration
{
    public function up()
    {
        Schema::create('Wines', function (Blueprint $table) {

            //$table->string('ID');
            $table->string('Name');
            $table->string('Type');
            $table->integer('Quantity');
            $table->float('Price');
            $table->string('Region');

            $table->primary('ID');
        });
    }

    public function down()
    {
        Schema::dropIfExists('wines');
    }
}