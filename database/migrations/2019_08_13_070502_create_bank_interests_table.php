<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_interests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_name')->nullable();
            $table->string('funding_type')->nullable();
            $table->string('prime_delta')->nullable();
            $table->string('years')->nullable();
            $table->string('prime')->nullable();
            $table->string('const_inter_linked')->nullable();
            $table->string('const_inter_unlinked')->nullable();
            $table->string('var_inter_5year_linked')->nullable();
            $table->string('var_inter_5year_unlinked')->nullable();
            $table->string('euro_inter')->nullable();
            $table->string('dollar_inter')->nullable();
            $table->string('eligibility_inter')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_status')->nullable();
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
        Schema::dropIfExists('bank_interests');
    }
}
