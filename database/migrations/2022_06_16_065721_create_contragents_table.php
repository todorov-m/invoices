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
        Schema::create('contragents', function (Blueprint $table) {
            $table->id();
            $table->string('contr_name');
            $table->string('contr_bulstat');
            $table->string('contr_iban');
            $table->string('contr_bankid');
            $table->string('contr_code');
            $table->string('contr_bank');
            $table->string('contr_bic');
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
        Schema::dropIfExists('contragents');
    }
};
