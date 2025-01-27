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
            $table->string('network_status'); // In Network / Out of Network
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
            $table->json('deductibles')->nullable(); // JSON for Individual, Family, Ortho
            $table->json('deductible_remain')->nullable(); // JSON for Individual, Family, Ortho
            $table->string('deductible_applies_to')->nullable();
            $table->boolean('preventive_waived')->default(false);
            $table->json('required_preauth')->nullable(); // Extraction, Crown, etc.
            $table->json('coverage_percentages')->nullable(); // Diagnostic, Preventive, etc.
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
