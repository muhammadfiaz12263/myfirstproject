<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('designation', 100);
            $table->string('phone', 50);
            $table->string('creditCardType', 100);
            $table->string('creditCardNumber', 100);
            $table->string('creditCardExpirationDateString', 50);
            $table->string('buildingNumber');
            $table->string('streetName', 100);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('country', 100);
            $table->string('post_code', 100);
            $table->string('latitude', 50);
            $table->string('longitude', 50);
            $table->string('password');
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
        Schema::dropIfExists('employees');
    }
}
