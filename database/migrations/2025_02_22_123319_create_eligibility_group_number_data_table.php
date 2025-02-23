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
        Schema::create('eligibility_group_number_data', function (Blueprint $table) {
            $table->id();
            $table->string('group_number')->unique();
            $table->string('group_name')->nullable();
            $table->json('exam_data')->nullable();
            $table->json('coverage_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibility_group_number_data');
    }
};
