<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_donors', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('name', 100);
            $table->varchar('email', 100);
            $table->varchar('mobile', 11);
            $table->varchar('location');
            $table->varchar('blood-group');
            $table->number('last-donated-date', 2);
            $table->varchar('last-donated-month');
            $table->number('last-donated-year', 4);
            $table->string('company');
            $table->string('job-tile');
            $table->date('dob');
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
        Schema::dropIfExists('blood_donors');
    }
};