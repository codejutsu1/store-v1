<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paystack_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->bigInteger('id');
            $table->string('domain');
            $table->string('status');
            $table->string('reference');
            $table->string('amount');
            $table->string('gateway_response');
            $table->string('ip_address');
            $table->bigInteger('fees');
            $table->string('authorization_code');
            $table->string('brand');
            $table->string('card_type');
            $table->string('bank');
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
        Schema::dropIfExists('paystack_details');
    }
};
