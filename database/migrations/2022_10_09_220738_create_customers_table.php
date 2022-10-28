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
        Schema::create('customers', function (Blueprint $table) {
            $table->string("customerName", 255)->unique();
            $table->string("contactFirstName", 255);
            $table->string("contactLastName", 255);
            $table->text("phone");
            $table->text("addressLine1");
            $table->text("addressLine2")->nullable();
            $table->text("city");
            $table->text("state");
            $table->integer("postalCode");
            $table->text("country");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};