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
        Schema::create('insurance_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('insurance_plan_id'); 
            $table->string('full_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('number')->nullable();
            $table->date('policy_start_date')->nullable();
            $table->string('nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('destination')->nullable();
            $table->string('passport_id')->nullable();
            $table->date('date_of_guarantee')->nullable();
            $table->date('expire_of_guarantee')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->string('uploaded_passport')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
    
            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('insurance_plan_id')->references('id')->on('insurances_plans')->onDelete('cascade'); // Corrected here
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_purchases');
    }
};
