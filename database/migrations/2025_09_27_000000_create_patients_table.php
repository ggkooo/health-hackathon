<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('insurance_number')->nullable();
            $table->string('insurance_company')->nullable();
            $table->string('name');
            $table->date('birth_date');
            $table->string('address');
            $table->string('cpf', 14)->unique();
            $table->string('rg', 20)->nullable();
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('email')->unique();
            $table->string('phone', 20);
            $table->string('responsible')->nullable();
            $table->string('emergency_contact', 20)->nullable();
            $table->string('marital_status', 20)->nullable();
            $table->string('blood_type', 3)->nullable();
            $table->text('allergies')->nullable();
            $table->text('observations')->nullable();
            $table->date('admission_date')->nullable();
            $table->date('discharge_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};

