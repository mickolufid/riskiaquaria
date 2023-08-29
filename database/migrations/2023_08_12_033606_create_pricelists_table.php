<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricelists', function (Blueprint $table) {
            $table->id();
            $table->char('productCode', 10);
            $table->string('productCategory', 50);
            $table->string('productCommontName', 100);
            $table->string('productScientificName', 100);
            $table->string('productIndonesianName', 100);
            $table->double('productPrice', 10, 2);
            $table->string('productSize', 50);
            $table->string('productImage'); 
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
        Schema::dropIfExists('pricelists');
    }
}
