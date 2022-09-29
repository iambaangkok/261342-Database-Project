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
            $table->varchar(15)('productCode');
            $table->varchar(50)('productName');
            $table->Varchar(50)('productLine');
            $table->varchar(10)('productScale');
            $table->varchar(50)('productvendor');
            $table->text('productDescrition');
            $table->smallint(6)('quantityInStock');
            $table->decimal(10,2)('buyPrice');
            $table->decimal(10,2)('MSRP');
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
