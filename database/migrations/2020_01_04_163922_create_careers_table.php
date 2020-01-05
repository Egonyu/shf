<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->bigInteger('phone');
            $table->string('email');
            $table->string('employer');
            $table->string('position');
            $table->string('special_talent');
            $table->string('volunteering_field');
            $table->string('physical_limitations');
            $table->bigInteger('emergency_contact');
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
        Schema::dropIfExists('careers');
    }
}
