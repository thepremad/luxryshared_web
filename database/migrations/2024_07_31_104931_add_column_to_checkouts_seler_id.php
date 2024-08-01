<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('seller_id');
            $table->string('booking_date');
            $table->string('withdrawl_request')->default(0);
        });
    }

    public function down(): void
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->dropColumn('seller_id');
            $table->dropColumn('booking_date');
            $table->dropColumn('withdrawl_request');

        });
    }
};
