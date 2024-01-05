<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('repeat_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sales_id');
            $table->dateTime('OrderDate')->default(now());
            $table->string('CustomerID');
            $table->string('CustomerName');
            $table->enum('OrderStatus', ['Pending', 'Processing', 'Completed', 'Cancelled', 'Submitted']);
            $table->string('ProductID');
            $table->string('Quantity');
            $table->decimal('Price');
            $table->decimal('total_price', 8, 2)->default(0);
            $table->integer('DeliveryPeriod');
            $table->string('Remarks');
            $table->timestamps();

        });

        Schema::table('repeat_orders', function ($table) {
            $table->foreign('sales_id')->references('id')->on('salesorders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('repeat_orders');
    }
};
