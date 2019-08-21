<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClerksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clerks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bank_type')->nullable();
            $table->string('bank')->nullable();
            $table->string('branch')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('clerk_name')->nullable();
            $table->string('main_phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('mail')->nullable();
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
        Schema::dropIfExists('clerks');
    }
}
