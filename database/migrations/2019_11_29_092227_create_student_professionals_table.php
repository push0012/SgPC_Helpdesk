<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_professionals', function (Blueprint $table) {
            $table->string('job_availability',3);
            $table->string('job_sector',15);
            $table->string('job_preference',254);
            $table->string('it_skill',3);
            $table->string('it_skill_detail',254);
            $table->string('extra_activity',254);
            $table->char('sp_confirm_data',1);
            $table->timestamps();
        });
        Schema::table('student_professionals', function (Blueprint $table) {
            $table->unsignedBigInteger('stu_id');
        
            $table->foreign('stu_id')->references('stu_id')->on('students')
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
        Schema::dropIfExists('student_professionals');
    }
}
