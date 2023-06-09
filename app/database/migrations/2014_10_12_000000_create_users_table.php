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
            $table->string('username');
            $table->string('image')->nullable();
            $table->string('number')->unique();
            // $table->string('number');
            $table->string('email')->unique();
            // $table->string('email');
            $table->string('referral')->unique();
            $table->boolean('is_owner')->default(false); 
            $table->boolean('is_admin')->default(false);
            $table->string('komisi')->nullable();
            $table->string('klaim')->nullable();
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password');
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
