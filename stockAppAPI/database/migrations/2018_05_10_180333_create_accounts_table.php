<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('user_id');
	        $table->string('firstName');
            $table->string('lastName');
            $table->string('middleName');
            $table->string('email');
            $table->string('address');
            $table->string('zipCode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('phone');
            $table->string('mobile');
	        $table->string('industry');
	        $table->string('occupation');
	        $table->string('annualIncome');
	        $table->boolean('isVerified');
	        $table->date('dob');
            $table->boolean('isActive');
	        $table->foreign('user_id')->references('uid')->on('users');
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
        Schema::dropIfExists('accounts');
    }
}
