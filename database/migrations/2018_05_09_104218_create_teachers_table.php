<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->boolean('sex');
            $table->date('dob');
            $table->string('nationalcard');
            $table->string('specialization');
            $table->boolean('status');
            $table->string('nationality');
            $table->string('workinghours');
            $table->string('phone');
            $table->string('email');
            $table->string('village');
            $table->string('city');
            $table->string('district');
            $table->string('province');
            $table->string('currentaddress');
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
        Schema::dropIfExists('teachers');
    }
}
