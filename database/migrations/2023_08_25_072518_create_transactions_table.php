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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->string('item_name');
            $table->string('item_price');
            $table->string('item_quantity');
            $table->integer('userId');
            $table->string('paid_status');
            $table->string('order_id');
            $table->foreign('address_id')->references("address_id")->on("addresses")->onDelete('cascade')->onUpdate('cascade');;
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
