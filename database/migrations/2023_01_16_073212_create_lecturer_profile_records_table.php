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
        Schema::create('lecturer_profile_records', function (Blueprint $table) {
            $table->string('LecturerID')->primary();
            $table->string('lecturer_name', 100);
            $table->string('lecturer_email', 100);
            $table->string('lecturerPhone_num', 100)->nullable();
            $table->string('lecturer_gender', 100)->nullable();
            $table->string('office_location', 255)->nullable();
            $table->string('expertise', 100)->nullable();
            $table->string('password', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecturer_profile_records');
    }
};
