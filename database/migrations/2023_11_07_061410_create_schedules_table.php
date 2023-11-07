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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('shift_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete
            ('cascade');

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
