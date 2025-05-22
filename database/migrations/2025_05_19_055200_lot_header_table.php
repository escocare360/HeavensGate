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
        Schema::create('lot_header', function (Blueprint $table) {
            $table->id('Lot_id');
            $table->string('Lot_name')->unique();
            $table->string('Lot_type');
            $table->string('Lot_group');
            $table->string('Lot_size');
            $table->string('Lot_status');
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
