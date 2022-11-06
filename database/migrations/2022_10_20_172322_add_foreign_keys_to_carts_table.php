<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->foreign(['id_user'], 'cart_ibfk_1')->references(['id'])->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign(['productCode'], 'cart_ibfk_2')->references(['productCode'])->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign('cart_ibfk_1');
            // $table->dropForeign('cart_ibfk_2');
        });
    }
}
