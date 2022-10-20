<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->foreign(['officeCode'], 'employees_ibfk_2')->references(['officeCode'])->on('offices');
            $table->foreign(['reportsTo'], 'employees_ibfk_1')->references(['employeeNumber'])->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign('employees_ibfk_2');
            $table->dropForeign('employees_ibfk_1');
        });
    }
}
