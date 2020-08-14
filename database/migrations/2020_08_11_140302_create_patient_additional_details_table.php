<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientAdditionalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_additional_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id');
            $table->text('local_address');
            $table->text('local_street_number');
            $table->text('local_subdivision');
            $table->text('local_city');
            $table->text('local_country');
            $table->string('local_postal_code');
            $table->string('local_telephone_number');
            $table->string('local_fax_number')->nullable();
            $table->string('local_email');
            $table->text('foreign_address')->nullable();
            $table->text('foreign_street_number')->nullable();
            $table->text('foreign_subdivision')->nullable();
            $table->text('foreign_city')->nullable();
            $table->text('foreign_country')->nullable();
            $table->string('foreign_postal_code')->nullable();
            $table->string('foreign_telephone_number')->nullable();
            $table->string('foreign_fax_number')->nullable();
            $table->string('foreign_email')->nullable();
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_number');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_additional_details');
    }
}
