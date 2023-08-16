<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_hp')->nullable();
            $table->string('role');
            $table->string('referral_code')->unique()->nullable(); // Add referral_code column
            $table->unsignedBigInteger('referral_id')->nullable(); // Add referrer_id column
            $table->rememberToken();
            $table->timestamps();

            // Add foreign key constraint for referrer relationship
            $table->foreign('referral_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
