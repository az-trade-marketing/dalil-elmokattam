<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->string('password');
            $table->string('password-confirmation');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->string('google_id')->nullable();
            $table->string('apple_id')->nullable();
            $table->string('login_type')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('otp')->default(0);
            $table->enum('status', ['active', 'intactive'])->default('active');
            $table->string('photo')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
