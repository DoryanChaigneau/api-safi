<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_type_id');
            $table->foreign('employee_type_id')->references('id')->on('employee_type');
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('district');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('login');
            $table->longText('password');
            $table->string('address')->nullable(true)->default(null);
            $table->string('postal_code')->nullable(true)->default(null);
            $table->string('city')->nullable(true)->default(null);
            $table->string('phone')->nullable(true)->default(null);
            $table->date('hireDate')->nullable(true)->default(null);
            $table->string('token', 64)->nullable(true)->default(null);
            $table->boolean('activated')->default(false);
            $table->timestamps();
        });
        Schema::table('district', function (Blueprint $table) {
            $table->foreign('deleguate_id')->references('id')->on('employee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
