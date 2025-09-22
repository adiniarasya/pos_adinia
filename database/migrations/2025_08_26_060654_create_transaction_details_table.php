<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->bigIncrements('transaction_detail_id');
            $table->foreignId('transaction_id')->references('transaction_id')->on('transactions');
            $table->foreignId('product_id')->references('product_id')->on('products');
            $table->integer('quantity');
            $table->decimal('unit_price', 15,2);
            $table->decimal('subotal', 15,2);
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
        Schema::dropIfExists('transaction_details');
    }
}
