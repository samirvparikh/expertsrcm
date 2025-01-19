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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // First name
            $table->string('middle_name')->nullable(); // Middle name (optional)
            $table->string('last_name'); // Last name
            $table->date('dob')->nullable(); // Date of birth
            $table->integer('age')->nullable(); // Age (optional, can be calculated dynamically)
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Gender
            $table->string('email')->nullable(); // Email (unique)
            $table->string('cell_phone')->nullable(); // Cell phone
            $table->unsignedBigInteger('created_by')->nullable(); // User who created the record
            $table->unsignedBigInteger('updated_by')->nullable(); // User who last updated the record
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
