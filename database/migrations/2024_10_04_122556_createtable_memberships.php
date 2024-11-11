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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('paid_payment');
            $table->string('cancel_payment');
            $table->string('payment_option');
            $table->string('refund_payment');
            $table->string('status');
            $table->string('order_id');
            $table->string('transation_id');
            $table->string('fee');
            $table->timestamps();
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
