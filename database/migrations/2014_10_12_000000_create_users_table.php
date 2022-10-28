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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('username')->unique();
            $table->string('email')->unique();
<<<<<<< HEAD:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('customerNumber')->unique();
=======
            $table->integer('customerNumber')->unique();
>>>>>>> 18e2e74eb7bf2a4be7b2b2ec6621103eeab383ad:database/migrations/2022_10_12_000001_create_users_table.php
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
