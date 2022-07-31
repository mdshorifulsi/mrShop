<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            
            $table->bigIncrements('order_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('shipping_id');
            $table->unsignedBigInteger('payment_id');

            $table->string('order_total');
            $table->string('order_status');

            $table->foreign('customer_id')
                ->references('customer_id')->on('customers')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                 $table->foreign('shipping_id')
                ->references('shipping_id')->on('shippings')
                ->onUpdate('cascade')
                ->onDelete('cascade');

                 $table->foreign('payment_id')
                ->references('payment_id')->on('payments')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->timestamps();
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
