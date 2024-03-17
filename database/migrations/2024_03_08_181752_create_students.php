<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('stdId');
            $table->string('stdName',255);
            $table->unsignedBigInteger('classId');
            $table->foreign('classId')->references('classId')->on('classes');
            $table->string('stdIC')->nulable();
            $table->string('fathersName',255);
            $table->string('mothersName',255);
            $table->string('dob',100);
            $table->string('phoneNo',50);
            $table->string('alternatePhone',50);
            $table->string('stdGender');
            $table->string('address',255);
            $table->string('stdImage')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
