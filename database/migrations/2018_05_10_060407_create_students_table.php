<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',20);
            $table->string('lastname',20);
            $table->boolean('sex');
            $table->date('dob');
            $table->string('nationalcard');
            $table->string('fathername');
            $table->string('nationality');
            $table->string('phone');
            $table->string('occupation');
            $table->string('roll_no');
            $table->string('class');
            $table->string('section');
            $table->date('addmission_date');
            $table->string('village');
            $table->string('city');
            $table->string('district',50)->nullable();
            $table->string('province',50)->nullable();
            $table->string('currentaddress',20)->nullable();
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
        Schema::dropIfExists('students');
    }
}
