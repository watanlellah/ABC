<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('national_id');
            $table->text('address');
            $table->date('birth_date');
            $table->text('mobile_no');
            $table->text('dr_in');
            $table->text('diagnose');
            $table->text('report');
            $table->boolean  ('status');
            $table->text('image');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('fromdr_id')->unsigned();
            $table->foreign('fromdr_id')->references('id')->on('fromdrs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
    }
}
