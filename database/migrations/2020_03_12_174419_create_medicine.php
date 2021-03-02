<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('family');
            $table->string('commercial_name');
            $table->string('composition')->nullable(true)->default(null);
            $table->string('effects')->nullable(true)->default(null);
            $table->string('contraindication')->nullable(true)->default(null);
            $table->integer('order_of_priority')->nullable(true)->default(null);
            $table->string('laboratory_name')->nullable(true)->default(null);
            $table->string('dose')->nullable(true)->default(null);
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
        Schema::dropIfExists('medicine');
    }
}
