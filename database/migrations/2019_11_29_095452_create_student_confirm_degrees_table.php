<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentConfirmDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_confirm_degrees', function (Blueprint $table) {
            $table->string('degree_reg_no',9);
            $table->boolean('reg_confirm_dig');
            $table->boolean('deleted');
            $table->string('user_data',50);
            $table->timestamps();
        });
        Schema::table('student_confirm_degrees', function (Blueprint $table) {
            $table->unsignedBigInteger('stu_id');
        
            $table->foreign('stu_id')->references('stu_id')->on('students')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('student_confirm_degrees', function (Blueprint $table) {
            $table->unsignedBigInteger('clg_id');
        
            $table->foreign('clg_id')->references('clg_id')->on('colleges')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('student_confirm_degrees', function (Blueprint $table) {
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
        Schema::dropIfExists('student_confirm_degrees');
    }
}
