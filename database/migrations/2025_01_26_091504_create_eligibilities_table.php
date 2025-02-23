<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEligibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligibilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('insurance_id');
            $table->enum('is_eligible', ['Yes', 'No'])->default('No');
            $table->string('policy_holder_name')->nullable();
            $table->date('policy_holder_dob')->nullable();
            $table->string('insurance_name');
            $table->string('network_status'); // In Network / Out of Network //1=>In Network, 0=>Out of Network
            $table->string('member_id')->nullable();
            $table->string('group_name')->nullable();
            $table->string('group_number')->nullable();
            $table->date('effective_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('claims_filing_limit')->nullable();
            $table->enum('life_time', ['Yes', 'No'])->default('Yes');
            $table->string('waiting_period')->nullable();
            $table->string('waiting_period_remarks')->nullable();
            $table->string('missing_tooth_clause')->nullable();
            $table->string('missing_tooth_clause_remarks')->nullable();
            $table->string('ortho_maximum')->nullable();
            $table->string('ortho_remaining_maximum')->nullable();
            $table->string('ortho_age_limit')->nullable();
            $table->string('annual_maximum')->nullable();
            $table->string('remaining_maximum')->nullable();
            $table->string('plan_year')->nullable();
            $table->string('deductible_applies_to')->nullable();
            $table->string('preventive_waived')->nullable();
            $table->json('deductibles_data')->nullable(); // JSON column to store all exam data
            $table->json('exam_data')->nullable(); // JSON column to store all exam data
            $table->json('coverage_data')->nullable(); // JSON column to store Coverage data like Diagnostic, Preventive, etc.
            $table->json('required_preauth_xray_data')->nullable(); // JSON column to store Coverage data like extraction, crown, rct, etc.
            $table->json('fluoride_sealants_data')->nullable(); //JSON data store            
            $table->json('share_history_data')->nullable(); //JSON data store            
            $table->date('verified_date')->nullable();
            $table->string('verified_by')->nullable();
            $table->string('insurance_rep_name')->nullable();
            $table->string('insurance_reference_number')->nullable();
            $table->string('additional_notes')->nullable();
            $table->timestamps();

            // Foreign Key
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('insurance_id')->references('id')->on('insurances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eligibilities');
    }
}
