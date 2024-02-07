<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderings', function (Blueprint $table) {
            $table->id();
            $table->integer('pid');
            $table->text('seller_id');
            $table->string('seller_name');
            $table->text('seller_phone');
            $table->string('customer_id');
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('city');
            $table->text('district');
            $table->integer('quantity');
            $table->integer('price');
            $table->text('description');
            $table->text('product');
            $table->text('status');
            $table->text('featured_image');
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
        Schema::dropIfExists('orderings');
    }
}
