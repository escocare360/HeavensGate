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
        Schema::create('Customer', function (Blueprint $table) {
        $table->id('Customer_id');
        $table->string('First_name');
        $table->string('Last_name');
        $table->string('Nickname');
        $table->string('Email');
        $table->string('Address');
        $table->string('Number');
        $table->string('Referral');
        $table->timestamp('Created_at')->nullable();
        $table->timestamp('Updated_at')->nullable();
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
