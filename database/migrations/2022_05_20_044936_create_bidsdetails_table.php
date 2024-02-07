<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('bidsdetails', function (Blueprint $table) {
            $table->id();
            $table->text('product_id');
            $table->text('product_name');
            $table->float('biding_price');
            $table->text('customer_id');
            $table->text('customer_name');
            $table->text('contact_no');
            $table->text('seller_id');
            $table->text('seller_name');
            $table->text('seller_phone');
            $table->text('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bidsdetails');
    }
}
