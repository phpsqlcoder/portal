<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('pmh_hpn')->nullable();
            $table->string('pmh_dm')->nullable();
            $table->string('pmh_ba')->nullable();
            $table->string('pmh_ca')->nullable();
            $table->string('pmh_heart_disease')->nullable();
            $table->string('pmh_operation')->nullable();
            $table->string('psh_smoking')->nullable();
            $table->string('psh_alcohol')->nullable();
            $table->string('fmh_similar_lesions')->nullable();
            $table->string('fmh_ca')->nullable();
            $table->string('allergy')->nullable();
            $table->string('soap')->nullable();
            $table->string('shampoo')->nullable();
            $table->string('lotion')->nullable();
            $table->string('perfume')->nullable();
            $table->string('detergent')->nullable();
            $table->string('fabric_softener')->nullable();
            $table->string('lmp')->nullable();
            $table->string('pmp')->nullable();
            $table->string('pregnant_plans')->nullable();
            $table->integer('user_id');
            $table->softDeletes();
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
        Schema::dropIfExists('patient_details');
    }
}
