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
        Schema::create('jadwal_dokters', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('doctorId');
            $table->foreign('doctorId')->references('id')->on('dokters');
            
            $table->date('hari');
            $table->time('start_time');
            $table->time('end_time');
            // $table->enum('status', ['available', 'booked']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_dokters');
    }
};
