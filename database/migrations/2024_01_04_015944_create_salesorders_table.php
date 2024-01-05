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
        Schema::create('salesorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('OrderDate');
            $table->string('CustomerID');
            $table->string('CustomerName');
            $table->enum('OrderStatus', ['Pending', 'Processing', 'Completed', 'Cancelled']);
            $table->string('ProductID');
            $table->string('Quantity');
            $table->decimal('Price');
            $table->decimal('total_price');
            $table->integer('DeliveryPeriod');
            $table->string('Remarks');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesorders');
    }
};
