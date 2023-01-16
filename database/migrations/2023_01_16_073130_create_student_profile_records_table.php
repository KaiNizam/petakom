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
        Schema::create('student_profile_records', function (Blueprint $table) {        
            $table->string('StudentID')->primary();
            $table->string('student_name', 100);
            $table->string('student_email', 100);
            $table->string('studentPhone_num', 100)->nullable();
            $table->string('student_gender', 100)->nullable();
            $table->string('home_address', 255)->nullable();
            $table->string('program', 100)->nullable();
            $table->string('password', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profile_records');
    }
};
