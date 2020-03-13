<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaddishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaddishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name_of_Deceased');
            $table->string('Fathers_Name');
            $table->string('G_Date');
            $table->string('J_Date');
            $table->integer('Jday');
            $table->string('Lang');
            $table->boolean('After_sunset');
            $table->boolean('Order');
            $table->boolean('Difference_Year');
            $table->integer('Client_id')->nullable();
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
        Schema::dropIfExists('kaddishes');
    }
}
