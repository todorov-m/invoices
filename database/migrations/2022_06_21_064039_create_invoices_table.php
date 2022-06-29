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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('contragents_id');
            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->decimal('invoice_amount',7,2);
            $table->date('invoice_maturity_date');
            $table->integer('invoice_type');
            $table->integer('invoice_state')->default('0');
            $table->integer('users_id');
            $table->date('invoice_check_date');
            $table->integer('invoice_check_userid');
            $table->dateTime('invoice_export_datetime');
            $table->integer('banks_id');
            $table->string('invoice_iban');
            $table->string('invoice_bulstat');

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
        Schema::dropIfExists('invoices');
    }
};
