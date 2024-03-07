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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->string('email');
            $table->date('expiry_date');
            $table->integer('payment_card_id');
            $table->string('country');
            $table->string('fname');
            $table->string('middlename');
            $table->string('lname');
            $table->integer('home_tel');
            $table->string('address1');
            $table->string('address2');
            $table->string('state');
            $table->string('postal_code');
            $table->string('type');
            $table->string('suburb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
