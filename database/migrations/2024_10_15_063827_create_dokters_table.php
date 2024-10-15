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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('spesialisId');
            $table->unsignedBigInteger('userId');
            
            $table->string('namaDokter');
            
            $table->timestamps();
            
            $table->foreign('spesialisId')->references('id')->on('spesialisasis');
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
