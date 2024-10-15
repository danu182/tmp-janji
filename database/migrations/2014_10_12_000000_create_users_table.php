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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('nik');
            $table->date('birthDay');
            $table->string('nip');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->longText('alamat')->nullable();
            $table->longText('hp')->nullable();
            $table->string('tipe')->default(0);
            // 0 jika user
            // 1 jika admin
            // 3 jika dokter
            // 4 jika superadmin
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
