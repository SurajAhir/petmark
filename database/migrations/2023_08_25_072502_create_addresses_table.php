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
        Schema::create('addresses', function (Blueprint $table) {
            $table->unsignedBigInteger('address_id')->autoIncrement();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('companyName');
            $table->string('country');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipCode');
            $table->integer('userId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
