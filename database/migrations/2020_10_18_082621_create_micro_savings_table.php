<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicroSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('micro_savings', function (Blueprint $table) {
            $table->id();
            $table->integer('micro_account_id')->key();
            $table->integer('user_id')->key();
            $table->double('amount');
            $table->string('transaction_id')->unique()->key();
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
        Schema::dropIfExists('micro_savings');
    }
}
