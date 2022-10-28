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
        Schema::create('cart', function (Blueprint $table) {

            $table->string('productCode',15)->unique();
            $table->string('productName',70);
            $table->string('productLine',50);
            $table->string('productScale',10);
            $table->string('productVendor',50);
            $table->text('productDescrition');
            $table->smallInteger('quantityInStock',6);
            $table->decimal('buyPrice',10,2);
            $table->decimal('MSRP',10,2);
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
        Schema::dropIfExists('carts');
    }
};
