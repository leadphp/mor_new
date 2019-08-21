<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksRegulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks_regulations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('options')->nullable();
            $table->string('aprt_no_morg')->nullable();
            $table->string('aprt_with_morg')->nullable();
            $table->string('rental_aprt')->nullable();
            $table->string('free_aprt')->nullable();
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
        Schema::dropIfExists('banks_regulations');
    }
}
