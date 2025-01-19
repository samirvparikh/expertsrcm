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
        Schema::create('csv', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('dob')->nullable();
            $table->string('insurance_name')->nullable();
            $table->string('subscriber_id')->nullable();
            $table->string('doctor')->nullable();
            $table->string('billing_date')->nullable();
            $table->string('prcode')->nullable();
            $table->string('tooth')->nullable();
            $table->string('surface')->nullable();
            $table->string('quadrant')->nullable();
            $table->string('cost')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csv');
    }
};
