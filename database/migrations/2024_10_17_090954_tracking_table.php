<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id'); // Auto-increment primary key
            $table->string('marking_code')->unique(); // Unique marking code for tracking
            $table->string('order_number')->unique(); // Unique order number
            $table->date('order_date'); // Date of the order
            $table->unsignedTinyInteger('status'); // Status of the order (1=Processed, 2=In Transit, 3=Delivered)
            $table->string('origin_warehouse'); // Origin warehouse location
            $table->string('destination_warehouse'); // Destination warehouse location
            $table->unsignedTinyInteger('current_location'); // Current location (1=Origin warehouse, 2=Destination)
            $table->unsignedTinyInteger('delivery_method'); // Delivery method (1=Air, 2=Sea)
            $table->string('receipt_number')->nullable(); // Local delivery receipt number
            $table->timestamps(); // Automatically adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

