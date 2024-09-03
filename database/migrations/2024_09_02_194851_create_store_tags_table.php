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
        Schema::create('store_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')
            ->constrained('tags')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('store_id')->constrained('stores')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('store_tags');
    }
};
