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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('country');
            $table->longText('street_address');
            $table->string('arp_suit_unit');
            $table->string('mobile_number');
            $table->unsignedBigInteger('city');
            $table->string('state')->nullable();
            $table->string('checkout_status');
            $table->unsignedBigInteger('size');
            $table->string('product_price');
            $table->string('shipping_address');
            $table->string('payment_method');
            $table->string('card_no')->nullable();
            $table->string('cvv')->nullable();
            $table->string('exp_date')->nullable();
            $table->string('card_holder_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
