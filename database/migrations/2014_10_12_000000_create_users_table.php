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
            $table->unsignedBigInteger('member_type_id')->nullable();
            $table->string('email', 150)->unique()->nullable();
            $table->string('nik', 16)->nullable();
            $table->string('fullname', 200)->nullable();
            $table->string('nickname', 50)->nullable();
            $table->string('phone', 12)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'member'])->default('member');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('member_type_id')->references('id')->on('member_types')->cascadeOnDelete();
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
