<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks_loans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loan_status')->nullable();
            $table->string('loan_type')->nullable();
            $table->string('loan_name_eng')->nullable();
            $table->string('loan_name_heb')->nullable();
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
        Schema::dropIfExists('banks_loans');
    }
}
