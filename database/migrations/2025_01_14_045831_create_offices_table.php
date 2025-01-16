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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone', 15)->nullable();
            $table->string('phone_ext', 10)->nullable();
            $table->string('fax', 15)->nullable();
            $table->string('fax_ext', 10)->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zipcode', 20)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('npi', 20)->nullable();
            $table->string('tin', 20)->nullable();
            $table->string('taxonomy_number', 20)->nullable();
            $table->string('logo')->nullable(); // Path to the logo file
            $table->string('photo')->nullable(); // Path to the photo file
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
        Schema::dropIfExists('offices');
    }
};
