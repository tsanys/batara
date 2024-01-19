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
        Schema::create('member_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('ktp_address');
            $table->string('ktp_regency', '100');
            $table->string('ktp_distric', '100');
            $table->string('ktp_subdistric', '100');
            $table->text('current_address');
            $table->string('current_regency', '100');
            $table->string('current_distric', '100');
            $table->string('current_subdistric', '100');
            $table->string('latitude', '150');
            $table->string('longitude', '150');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_addresses');
    }
};
