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
			$table->timestamp('email_verified_at')->nullable();
			$table->string('mobile')->unique()->nullable();
			$table->string('code')->unique()->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
			$table->enum('type', ['admin', 'user'])->default('user');
			$table->string('is_winner')->boolean()->default(0);
            $table->timestamp('win_date')->nullable();
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
