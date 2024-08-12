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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained('stores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('title')->nullable();
            $table->text('message')->nullable();
            $table->decimal('rating');
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
        Schema::dropIfExists('reviews');
    }
};
