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
        Schema::table('items', function (Blueprint $table) {
            $table->string('quantity')->nullable();
            $table->string('final_price')->nullable();
            $table->string('coupan_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('quantity')->nullable();
            $table->dropColumn('final_price')->nullable();
            $table->dropColumn('coupan_code')->nullable();

            
        });
    }
};
