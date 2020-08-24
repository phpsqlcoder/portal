<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelSchedulePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_schedule', function (Blueprint $table) {
            $table->integer('personnel_id')->unsigned()->index();
            $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('cascade');
            $table->integer('schedule_id')->unsigned()->index();
            $table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
            $table->primary(['personnel_id', 'schedule_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_schedule');
    }
}
