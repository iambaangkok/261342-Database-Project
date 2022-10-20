<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orderdetails', function (Blueprint $table) {
            $table->foreign(['productCode'], 'orderdetails_ibfk_2')->references(['productCode'])->on('products');
            $table->foreign(['orderNumber'], 'orderdetails_ibfk_1')->references(['orderNumber'])->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orderdetails', function (Blueprint $table) {
            $table->dropForeign('orderdetails_ibfk_2');
            $table->dropForeign('orderdetails_ibfk_1');
        });
    }
}
