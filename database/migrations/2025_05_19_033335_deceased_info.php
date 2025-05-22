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
        Schema::create('deceased', function (Blueprint $table) {
            $table->id('Deceased_id');

            $table->unsignedBigInteger('Customer_id'); // match type of Customer_id in Customer table

            $table->string('First_name');
            $table->string('Last_name');
            $table->string('Nickname');
            $table->string('Relationship_id')->nullable();
            $table->string('Age');
            $table->string('Gender');
            $table->timestamp('Burial_date')->nullable();
            $table->string('Remaining_time')->nullable();

            $table->timestamp('Created_at')->nullable();
            $table->timestamp('Updated_at')->nullable();

            $table->foreign('Customer_id')
                ->references('Customer_id')
                ->on('Customer')
                ->onDelete('cascade');
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
