<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductincartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productincarts', function (Blueprint $table) {
            $table->foreign(['productCode'], 'productincarts_ibfk_2')->references(['productCode'])->on('products');
            $table->foreign(['cartid'], 'productincarts_ibfk_1')->references(['cartid'])->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productincarts', function (Blueprint $table) {
            $table->dropForeign('productincarts_ibfk_2');
            $table->dropForeign('productincarts_ibfk_1');   
        });
    }
}
