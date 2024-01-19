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
        Schema::create('member_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('religion', 30);
            $table->string('place_of_birth', 100);
            $table->date('date_of_birth');
            $table->string('education', 5);
            $table->text('competence');
            $table->string('married_status', 20);
            $table->enum('npwp_status', ['sudah ada', 'belum ada']);
            $table->string('home_ownership_status', 50);
            $table->integer('administrative_cost')->default(0);
            $table->integer('principal_saving')->default(0);
            $table->integer('mandatory_saving')->default(0);
            $table->integer('special_mandatory_saving')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_details');
    }
};
