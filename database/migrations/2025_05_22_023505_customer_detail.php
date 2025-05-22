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
         Schema::create('customer_detail', function (Blueprint $table) {
            $table->id('Detail_id');
            $table->unsignedBigInteger('Customer_id');
            $table->string('Burial_lot_type');
            $table->string('Package');
            $table->string('Lot')->unique();
            $table->timestamp('Created_at');
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
