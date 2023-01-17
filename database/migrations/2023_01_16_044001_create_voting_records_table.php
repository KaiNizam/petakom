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
        Schema::create('voting_records', function (Blueprint $table) {
            $table->string('CandidateID')->primary();
            $table->foreignId('StudentID');
            $table->string('candidate_name', 255);
            $table->string('candidate_program', 255);
            $table->integer('candidate_year');
            $table->text('manifesto');
            $table->string('image',255);
            $table->integer('vote_result')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voting_records');
    }
};
