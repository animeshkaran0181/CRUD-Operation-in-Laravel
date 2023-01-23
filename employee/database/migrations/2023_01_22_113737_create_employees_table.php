<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('position');
            $table->string('employeeid');
            $table->string('bussinesarea');
            $table->string('street');
            $table->string('additionalinformation')->nullable();
            $table->bigInteger('zipcode');
            $table->string('place');
            $table->string('country');
            $table->bigInteger('phonenumber');
            $table->string('youremail');
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
        Schema::dropIfExists('employees');
    }
}
