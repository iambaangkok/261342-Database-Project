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
     * 
     * @Primary key(type="")
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->varchar('productCode',15)->unique();
            $table->varchar('productName',70);
            $table->Varchar('productLine',50);
            $table->varchar('productScale',10);
            $table->varchar('productvendor',50);
            $table->text('productDescrition');
            $table->smallint('quantityInStock',6);
            $table->decimal('buyPrice',10,2);
            $table->decimal('MSRP',10,2);
            
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
