<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Billprint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billprint', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')->references('id')->on('invoice');
            $table->string('bill_id')->unique();
            $table->string('client_name');
            $table->string('coordiantor');
            $table->string('client_type');
            $table->string('case_type');
            $table->string('case_desc');
            $table->string('email');
            $table->string('contact');
            $table->string('refered_by');
            $table->string('financial_year');
            $table->string('bill_no_for_financial_year');
            $table->string('subject');
            $table->biginteger('amount');
            $table->string('payment_mode');
            $table->string('payment_status');
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
        Schema::dropIfExists('billprint');
    }
}
