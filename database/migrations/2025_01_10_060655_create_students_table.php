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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dob');
            $table->string('gender');
            $table->string('classSelect');
            $table->string('nation');
            $table->string('religion');
            $table->string('caste');
            $table->string('scaste');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('fname');
            $table->string('mname');
            $table->string('photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
