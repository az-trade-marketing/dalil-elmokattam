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
        Schema::create('opning_times', function (Blueprint $table) {
            $table->id();
            $table->foreignId('store_id')->constrained('stores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('day_of_week')->nullable();
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('work_business')->default(1);
            $table->integer('shift_number')->default(1);
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
        Schema::dropIfExists('opning_times');
    }
};
