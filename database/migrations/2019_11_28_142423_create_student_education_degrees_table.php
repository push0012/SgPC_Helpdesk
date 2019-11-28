<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentEducationDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_education_degrees', function (Blueprint $table) {
            $table->string('medium',7);
            $table->string('digree_type',7);
            $table->string('digree_class',22);
            $table->date('effective_date');
            $table->timestamps();
        });
        Schema::table('student_education_degrees', function (Blueprint $table) {
            $table->unsignedBigInteger('stu_id');
        
            $table->foreign('stu_id')->references('stu_id')->on('students')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('student_education_degrees', function (Blueprint $table) {
            $table->unsignedBigInteger('clg_id');
        
            $table->foreign('clg_id')->references('clg_id')->on('colleges')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('student_education_degrees', function (Blueprint $table) {
            $table->unsignedBigInteger('cos_id');
        
            $table->foreign('cos_id')->references('cos_id')->on('courses')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_education_degrees');
    }
}
