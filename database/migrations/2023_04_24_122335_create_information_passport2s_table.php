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
        Schema::create('information_passport2s', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['female','male']);
            $table->enum('status',['multiple','single']);
            $table->date('date_birthday');
            $table->string('place_birth');
            $table->string('country_residency');
            $table->string('passport');
            $table->string('place_issue');
            $table->date('date_issue');
            $table->date('date_expiry');
            $table->date('date_arrival');
            $table->string('profession');
            $table->string('organization');
            $table->integer('visa_duration');
            $table->string('passport_picture');
            $table->string('personal_picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_passport2s');
    }
};
