<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_reports', function (Blueprint $table) {
            $table->bigIncrements('idReport');
            $table->bigInteger('idOrder')->unsigned();
            $table->foreign('idOrder')->references('idOrder')->on('ticket_orders');
            $table->string('bukti');
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
        Schema::dropIfExists('cash_reports');
    }
}
