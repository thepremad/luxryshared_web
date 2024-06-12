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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->unsignedBigInteger('brand_id');
            $table->longText('item_title');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('size_id');
            $table->string('mainImag');
            $table->longText('image_description');
            $table->double('rrp_price');
            $table->double('suggested_day_price');
            $table->double('sucurity_deposit');
            $table->double('fourDaysPrice');
            $table->double('sevenToTwentyNineDayPrice');
            $table->double('thirtyPlusDayPrice');
            $table->double('buy_price');
            $table->string('buy');
            $table->string('status')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
