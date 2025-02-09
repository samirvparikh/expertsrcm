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
        Schema::create('temp_eligibility_patients', function (Blueprint $table) {
            $table->id();
            $table->string('clinic', 191)->nullable();
            $table->string('appt_provider', 191)->nullable();
            $table->string('appt_date', 191)->nullable();
            $table->string('appt_time', 191)->nullable();
            $table->string('full_name', 191)->nullable();
            $table->string('date_of_birth', 191)->nullable();
            $table->string('hoh_full_name', 191)->nullable();
            $table->string('prim_subscriber', 191)->nullable();
            $table->string('prim_carrier_name', 191)->nullable();
            $table->string('prim_subscriber_id', 191)->nullable();
            $table->string('sec_carrier_name', 191)->nullable();
            $table->string('sec_subscriber_id', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_eligibility_patients');
    }
};
