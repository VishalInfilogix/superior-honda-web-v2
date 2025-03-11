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
        Schema::table('customer_inquiry', function (Blueprint $table) {
            $table->enum('customer_inquiry_category', ['product', 'promotion'])->default('product')->after('customer_email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_inquiry', function (Blueprint $table) {
            //
        });
    }
};
