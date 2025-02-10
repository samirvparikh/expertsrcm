<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eligibility_patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('office_id');
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('primary_insurance_id')->nullable();
            $table->unsignedBigInteger('secondary_insurance_id')->nullable();
            $table->string('appt_date')->nullable();
            $table->string('appt_time')->nullable();
            $table->string('prim_subscriber')->nullable();
            $table->string('prim_carrier_name')->nullable();
            $table->string('prim_subscriber_id')->nullable();
            $table->string('sec_carrier_name')->nullable();
            $table->string('sec_subscriber_id')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('office_id')->references('id')->on('offices');
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('primary_insurance_id')->references('id')->on('insurances');
            $table->foreign('secondary_insurance_id')->references('id')->on('insurances');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibility_patients');
    }
};
