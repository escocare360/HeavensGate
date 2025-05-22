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
        Schema::create('Inclusion', function (Blueprint $table) {
            $table->id('Inclusion_id');
            $table->unsignedBigInteger('Package_id')->nullable();
            $table->string('Rush_client');
            $table->string('Lot_size');
            $table->string('Materials');
            $table->string('Labor');
            $table->string('Man_power');
            $table->string('Price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
