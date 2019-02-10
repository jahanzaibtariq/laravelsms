<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('lec1');
            $table->string('lec2');
            $table->string('lec3');
            $table->string('lec4');
            $table->string('lec5');
            $table->string('lec6');
            $table->string('lec7');
            $table->string('lec8');
            $table->string('lec9');
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
        Schema::dropIfExists('time_tables');
    }
}
