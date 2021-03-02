<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invite', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('complementary_activity_id');
            $table->foreign('complementary_activity_id')->references('id')->on('complementary_activities');
            $table->unsignedBigInteger('invited_id');
            $table->foreign('invited_id')->references('id')->on('employee');
            $table->boolean('accepted')->default(false);
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
        Schema::dropIfExists('invite');
    }
}
