<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('order_no');
            $table->date('date');
            $table->text('payment_status');
            $table->text('delivery_status');
            $table->date('del_date');
            $table->decimal('price',8,2);
            $table->string('firstname');
            $table->string('lastname');

            $table->string('cellphone');
            $table->string('house_no');
            $table->string('room');
            $table->string('building_name');
            $table->string('alley');
            $table->string('road');
            $table->string('district');
            $table->string('subdistrict');
            $table->string('province');
            $table->string('zip_code');
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
