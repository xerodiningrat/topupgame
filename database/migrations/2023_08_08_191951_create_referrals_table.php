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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom untuk menghubungkan dengan pengguna yang direferensikan
            $table->unsignedBigInteger('referred_by'); // Kolom untuk menghubungkan dengan pengguna yang merujuk
            $table->integer('invitations')->default(0); // Tambahkan kolom invitations
            $table->timestamps();

            // Tambahkan foreign key constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('referred_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
};

