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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ar');
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->foreignId('admin_id')->references('id')->on('admins');
            $table->foreignId('category_id')->constrained('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('subscription_id')->constrained('subscriptions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->boolean('status')->default(true);
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('mobile')->unique()->nullable();
            $table->string('email')->unique()->nullable();
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
        Schema::dropIfExists('stores');
    }
};
