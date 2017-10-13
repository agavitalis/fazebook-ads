<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Publishers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('profilepics')->nullable();
            $table->string('url')->nullable();
            $table->string('plan')->default(0);
            $table->dateTime('datesubscribed');
            $table->string('status')->nullable();
            $table->string('upload')->nullable();
            $table->string('bankname')->nullable();
            $table->string('accountname')->nullable();
            $table->string('accountno')->nullable();
            $table->boolean('confirmed')->default(0);
            $table->string('balance')->default(0);
            $table->string('referal')->nullable();
            $table->string('referal_balance')->default(0);
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
        Schema::dropIfExists('publishers');
    }
}
