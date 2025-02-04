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
            $table->string('policy_holder_name')->nullable();
            $table->date('policy_holder_dob')->nullable();
            $table->string('insurance_name');
            $table->string('network_status'); // In Network / Out of Network //1=>In Network, 0=>Out of Network
            $table->string('member_id')->nullable();
            $table->string('group_name')->nullable();
            $table->string('group_number')->nullable();
            $table->date('effective_date')->nullable();
            $table->string('claims_filing_limit')->nullable();
            $table->boolean('life_time')->default(false);
            $table->string('waiting_period')->nullable();
            $table->string('missing_tooth_clause')->nullable();
            $table->string('ortho_maximum')->nullable();
            $table->string('ortho_remaining_maximum')->nullable();
            $table->string('ortho_age_limit')->nullable();
            $table->string('annual_maximum')->nullable();
            $table->string('remaining_maximum')->nullable();
            $table->string('plan_year')->nullable();
            $table->json('deductible_individual')->nullable();
            $table->json('deductible_family')->nullable();
            $table->json('deductible_ortho')->nullable();
            $table->json('deductible_remain_individual')->nullable();
            $table->json('deductible_remain_family')->nullable();
            $table->json('deductible_remain_ortho')->nullable();
            $table->string('deductible_applies_to')->nullable();
            $table->boolean('preventive_waived')->default(false);
            $table->json('exam_data')->nullable(); // JSON column to store all exam data
            $table->json('coverage_data')->nullable(); // Diagnostic, Preventive, etc.
            $table->json('required_preauth')->nullable(); // Extraction, Crown, etc.
            $table->string('diagnostic_xray')->nullable();
            $table->string('preventive')->nullable();
            $table->string('oral_facial_images')->nullable();
            $table->string('basic_restorative')->nullable();
            $table->string('major_restorative_d2950')->nullable();
            $table->string('major_restorative_d2740')->nullable();
            $table->string('endo')->nullable();
            $table->string('perio_d4341')->nullable();
            $table->string('perio_d4346')->nullable();
            $table->string('perio_d4381')->nullable();
            $table->string('oral_surgery')->nullable();
            $table->string('bonegraft')->nullable();
            $table->string('prostho')->nullable();
            $table->string('implants')->nullable();
            $table->string('ortho')->nullable();
            $table->string('nightguard')->nullable();
            $table->enum('extraction', ['yes', 'no'])->default('yes');
            $table->enum('crown', ['yes', 'no'])->default('yes');
            $table->enum('rct', ['yes', 'no'])->default('yes');
            $table->enum('periodontal', ['yes', 'no'])->default('yes');
            $table->enum('denture', ['yes', 'no'])->default('yes');            
            $table->string('exam_codes')->nullable();
            $table->string('cleaning_codes')->nullable();
            $table->string('xray_codes')->nullable();
            $table->string('fluoride_sealants_data')->nullable(); //JSON data store            
            $table->string('date')->nullable();
            $table->string('verified_by')->nullable();
            $table->string('insurance_rep_name')->nullable();
            $table->string('insurance_reference_number')->nullable();
            $table->string('additional_notes')->nullable();
            $table->timestamps();

            // Foreign Key
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
        Schema::dropIfExists('eligibilities');
    }
}
