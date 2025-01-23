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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id'); // Foreign key for patients table
            $table->unsignedBigInteger('insurance_id'); // Foreign key for insurances table
            $table->unsignedBigInteger('provider_id'); // Foreign key for providers table
            $table->date('dos'); // Date of Service
            $table->string('code')->nullable(); // Procedure Code
            $table->string('tooth')->nullable(); // Tooth Number
            $table->string('surface')->nullable(); // Surface of the Tooth
            $table->string('quadrant')->nullable(); // Quadrant
            $table->decimal('amount', 10, 2); // Amount Charged
            $table->unsignedBigInteger('created_by'); // User who created the record
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps(); // created_at and updated_at

            // Foreign key constraints
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('set null');
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('set null');
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('set null');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null'); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
