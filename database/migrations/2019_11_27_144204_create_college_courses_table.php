<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_courses', function (Blueprint $table) {
            $table->string('cos_coor_name',200);
            $table->string('cos_coor_mobile',10);
            $table->boolean('deleted');
            $table->string('user_data',50);
            $table->timestamps();
        });
        Schema::table('college_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('clg_id');
        
            $table->foreign('clg_id')->references('clg_id')->on('colleges')
                                    ->onDelete('cascade')
                                    ->onUpdate('cascade');
        });
        Schema::table('college_courses', function (Blueprint $table) {
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
        Schema::dropIfExists('college_courses');
    }
}
