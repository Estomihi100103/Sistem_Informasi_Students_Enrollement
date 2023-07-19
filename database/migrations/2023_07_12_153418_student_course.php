<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */



    public function up(): void
    {
        Schema::create('student_course', function (Blueprint $table) {
            $table->string('nim');
            $table->string('course_id');
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('students')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_course');
    }
};