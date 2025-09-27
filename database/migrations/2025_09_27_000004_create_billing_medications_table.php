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
        Schema::create('billing_medications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('billing_id');
            $table->unsignedBigInteger('medication_id');
            $table->decimal('medication_cost', 10, 2);
            $table->timestamps();

            $table->foreign('billing_id')->references('id')->on('billings')->onDelete('cascade');
            $table->foreign('medication_id')->references('id')->on('medications')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_medications');
    }
};
