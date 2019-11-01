<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankSettingsLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_settings_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_name')->nullable();
            $table->string('loan_fee')->nullable();
            $table->string('loan_interest')->nullable();
            $table->string('loan_time')->nullable();
            $table->string('return')->nullable();
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
        Schema::dropIfExists('bank_settings_loans');
    }
}
