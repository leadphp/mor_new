<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTwoStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_two_steps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->text('step_8')->nullable();
            $table->text('step_7')->nullable();
            $table->text('step_6')->nullable();
            $table->text('step_5')->nullable();
            $table->text('step_4')->nullable();
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
        Schema::dropIfExists('report_two_steps');
    }
}
