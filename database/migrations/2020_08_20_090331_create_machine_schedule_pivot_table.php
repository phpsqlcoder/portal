<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachineSchedulePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machine_schedule', function (Blueprint $table) {
            $table->integer('machine_id')->unsigned()->index();
            $table->foreign('machine_id')->references('id')->on('machines')->onDelete('cascade');
            $table->integer('schedule_id')->unsigned()->index();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->primary(['machine_id', 'schedule_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('machine_schedule');
    }
}
