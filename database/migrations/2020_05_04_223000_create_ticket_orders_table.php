<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_orders', function (Blueprint $table) {
            $table->bigIncrements('idOrder');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->bigInteger('idSchedule')->unsigned();
            $table->foreign('idSchedule')->references('idSchedule')->on('ticket_details');
            $table->integer('passenger');
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
        Schema::dropIfExists('ticket_orders');
    }
}
