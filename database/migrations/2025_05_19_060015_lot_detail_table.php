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
        Schema::create('lot_detail', function (Blueprint $table) {
            $table->id('Detail_id');
            $table->unsignedBigInteger('Lot_id')->nullable();
            $table->unsignedBigInteger('Deceased_id')->nullable();
            $table->unsignedBigInteger('Customer_id')->nullable();
            $table->unsignedBigInteger('Package_id')->nullable();
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
