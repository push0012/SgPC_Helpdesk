<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('stu_id');
            $table->string('title',5);
            $table->string('stu_name',200);
            $table->string('sex',6);
            $table->date('dob');
            $table->string('nic',12);
            $table->string('stu_address',200);
            $table->string('stu_telephone',10);
            $table->string('stu_email',100);
            $table->integer('district');
            $table->boolean('deleted');
            $table->string('user_data',50);
            $table->timestamps();
        });
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('dsa_id');
        
            $table->foreign('dsa_id')->references('dsa_id')->on('ds_divisions')
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
        Schema::dropIfExists('students');
    }
}
