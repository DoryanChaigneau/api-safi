<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractitioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('district');
            $table->string('lastname');
            $table->string('firstname')->nullable(false);
            $table->string('address')->nullable(true);
            $table->string('tel_fixed')->nullable(true);
            $table->string('tel_portable')->nullable(true);
            $table->string('profession')->nullable(true);
            $table->string('registered_apps')->nullable(true);
            $table->string('website')->nullable(true);
            $table->string('email')->nullable(true);
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
        Schema::dropIfExists('practitioner');
    }
}
